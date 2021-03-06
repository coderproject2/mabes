<?php
/**
 * Created by PhpStorm.
 * User: awalin
 * Date: 15/01/15
 * Time: 10:50
 */

namespace Mabes\Entity;

use Mabes\Core\CommonBehaviour\MassAssignmentTrait;
use Respect\Validation\Validator as v;

/**
 * @Entity(repositoryClass="TransferRepository")
 * @Table(name="transfer", indexes={@Index(name="search_idx", columns={"updated_at", "created_at"})})
 * @HasLifecycleCallbacks
 **/
class Transfer
{
    use MassAssignmentTrait;

    const STATUS_OPEN = 1;

    const STATUS_PROCESSED = 2;

    const STATUS_SUSPEND = 3;

    /**
     * @Id @Column(type="integer") @GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $transfer_id;

    /**
     * @ManyToOne(targetEntity="Member", inversedBy="transfer")
     * @JoinColumn(name="client_from", referencedColumnName="account_id")
     * @var \Mabes\Entity\Member
     **/
    protected $from_login;

    /**
     * @Column(type="string", length=64)
     * @var string
     */
    protected $from_name;

    /**
     * @Column(type="string", length=64)
     * @var string
     */
    protected $email;

    /**
     * @ManyToOne(targetEntity="Member", inversedBy="transfer")
     * @JoinColumn(name="client_to", referencedColumnName="account_id")
     * @var \Mabes\Entity\Member
     **/
    protected $to_login;

    /**
     * @Column(type="string", length=64)
     * @var string
     */
    protected $to_name;

    /**
     * @Column(type="float")
     * @var float
     */
    protected $amount;

    /**
     * @Column(type="string", length=16, nullable=true)
     * @var string
     */
    protected $phone;

    /**
     * @Column(type="smallint")
     * @var smallint
     */
    protected $status;

    /**
     * @Column(type="datetime")
     * @var \DateTime
     *
     */
    protected $created_at;

    /**
     * @Column(type="datetime")
     * @var \DateTime
     */
    protected $updated_at;

    /**
     * @PrePersist
     * @PreUpdate
     */
    public function validate()
    {
        v::float()->assert($this->amount);
        v::numeric("+")->startsWith("+")->assert($this->phone);
        v::notEmpty()->assert($this->status);
    }

    /**
     * @PrePersist
     */
    public function beforeInsert()
    {
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
    }

    /**
     * @PreUpdate
     */
    public function beforeUpdate()
    {
        $this->updated_at = new \DateTime();
    }

    /**
     * @return int
     */
    public function getTransferId()
    {
        return $this->transfer_id;
    }

    /**
     * @param int $transfer_id
     */
    public function setTransferId($transfer_id)
    {
        $this->transfer_id = $transfer_id;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return Member
     */
    public function getFromLogin()
    {
        return $this->from_login;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
        return $this->from_name;
    }

    /**
     * @param string $from_name
     */
    public function setFromName($from_name)
    {
        $this->from_name = $from_name;
    }

    /**
     * @param Member $from_login
     */
    public function setFromLogin($from_login)
    {
        $from_login->addTransferFrom($this);
        $this->from_login = $from_login;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return Member
     */
    public function getToLogin()
    {
        return $this->to_login;
    }

    /**
     * @param Member $to_login
     */
    public function setToLogin($to_login)
    {
        $to_login->addTransferTo($this);
        $this->to_login = $to_login;
    }

    /**
     * @return string
     */
    public function getToName()
    {
        return $this->to_name;
    }

    /**
     * @param string $to_name
     */
    public function setToName($to_name)
    {
        $this->to_name = $to_name;
    }

    /**
     * @return smallint
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param smallint $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param \DateTime $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }
}
