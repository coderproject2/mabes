<?php
/**
 * Created by PhpStorm.
 * User: Awalin
 * Date: 8/11/15
 * Time: 11:57 AM
 */

namespace Mabes\Service;

use Evenement\EventEmitter;
use Mabes\Core\Contracts\CommandInterface;
use Mabes\Entity\Member;
use Mabes\Entity\MemberRepository;
use Mabes\Service\Command\EditMemberCommand;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class CreateMemberService
 * @package Mabes\Service
 */
class EditMemberService
{

    /**
     * @var MemberRepository
     */
    private $member_repo;

    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * @var EventEmitter
     */
    private $event_emitter;

    /**
     * @param MemberRepository $member_repo
     * @param ValidatorInterface $validator
     * @param EventEmitter $event_emitter
     */
    public function __construct(
        MemberRepository $member_repo,
        ValidatorInterface $validator,
        EventEmitter $event_emitter
    )
    {
        $this->event_emitter = $event_emitter;
        $this->member_repo = $member_repo;
        $this->validator = $validator;
    }


    /**
     * @param CommandInterface $command
     * @return bool
     */
    public function execute(CommandInterface $command)
    {
        if (!$command instanceof EditMemberCommand) {
            throw new \DomainException("Internal error, silahkan hubungi CS kami");
        }

        $command->setRepository($this->member_repo);

        $violation = $this->validator->validate($command);

        if ($violation->count() > 0) {
            $message = $violation->get(0)->getMessage();
            throw new \DomainException($message);
        }

//        $member = new Member();

        $member = $this->app->em->getRepository("Mabes\\Entity\\Member")->find($command->getAccountId());
        $member->setEmail($command->getEmail());
        $member->setAccountNumber($command->getAccountNumber());
        $member->setAccountHolder($command->getAccountHolder());
        $member->setBankName($command->getBankName());
        $member->setFullName($command->getFullname());
        $member->setAddress($command->getAddress());
        $member->setPhone($command->getPhone());

        $this->app->em->flush();
//        $this->member_repo->save($member);

        $data = [
            "account_id" => $member->getAccountId(),
            "email" => $member->getEmail(),
            "phone" => $member->getPhone(),
            "fullname" => $member->getFullName(),
            "bank_name" => $member->getBankName(),
            "account_number" => $member->getAccountNumber(),
            "account_holder" => $member->getAccountHolder(),
            "address" => $member->getAddress(),
            "date" => date("Y-m-d H:i:s")
        ];

        $this->event_emitter->emit("validation.created", [$data]);

        return true;
    }
} 