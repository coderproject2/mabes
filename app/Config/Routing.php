<?php

return [
    [
        "http_method" => "get",
        "route" => "/",
        "class" => "\\Mabes\\Controllers\\IndexController",
        "method" => "index",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/klaim-promo",
        "class" => "\\Mabes\\Controllers\\InvestorPasswordController",
        "method" => "getInvestorPassword",
        "auth" => false
    ],
    [
        "http_method" => "post",
        "route" => "/klaim-promo",
        "class" => "\\Mabes\\Controllers\\InvestorPasswordController",
        "method" => "postInvestorPassword",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/akun-islami",
        "class" => "\\Mabes\\Controllers\\IslamicAccountController",
        "method" => "getIslamicAccount",
        "auth" => false
    ],
    [
        "http_method" => "post",
        "route" => "/akun-islami",
        "class" => "\\Mabes\\Controllers\\IslamicAccountController",
        "method" => "postIslamicAccount",
        "auth" => false
    ],
    [
        "http_method" => "post",
        "route" => "/klaim-rebates",
        "class" => "\\Mabes\\Controllers\\ClaimRebatesController",
        "method" => "postClaimRebates",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/register",
        "class" => "\\Mabes\\Controllers\\RegistrationController",
        "method" => "getRegistration",
        "auth" => false
    ],
    [
        "http_method" => "post",
        "route" => "/register",
        "class" => "\\Mabes\\Controllers\\RegistrationController",
        "method" => "postRegistration",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/rebates",
        "class" => "\\Mabes\\Controllers\\RebatesController",
        "method" => "getRebates",
        "auth" => false
    ],
    [
        "http_method" => "post",
        "route" => "/rebates",
        "class" => "\\Mabes\\Controllers\\RebatesController",
        "method" => "postRebates",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance",
        "class" => "\\Mabes\\Controllers\\FinanceController",
        "method" => "index",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/transfer-balance",
        "class" => "\\Mabes\\Controllers\\FinanceController",
        "method" => "transferBalance",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/transaction-status",
        "class" => "\\Mabes\\Controllers\\FinanceController",
        "method" => "transactionStatus",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/deposit",
        "class" => "\\Mabes\\Controllers\\DepositController",
        "method" => "getDeposit",
        "auth" => false
    ],
    [
        "http_method" => "Post",
        "route" => "/finance/deposit",
        "class" => "\\Mabes\\Controllers\\DepositController",
        "method" => "postDeposit",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/withdrawal",
        "class" => "\\Mabes\\Controllers\\WithdrawalController",
        "method" => "getWithdrawal",
        "auth" => false
    ],
    [
        "http_method" => "post",
        "route" => "/finance/withdrawal",
        "class" => "\\Mabes\\Controllers\\WithdrawalController",
        "method" => "postWithdrawal",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/finance/transfer",
        "class" => "\\Mabes\\Controllers\\TransferController",
        "method" => "getTransfer",
        "auth" => false
    ],
    [
        "http_method" => "post",
        "route" => "/finance/transfer",
        "class" => "\\Mabes\\Controllers\\TransferController",
        "method" => "postTransfer",
        "auth" => false
    ],

    // ADMIN AREA

    [
        "http_method" => "get",
        "route" => "/auth/login",
        "class" => "\\Mabes\\Controllers\\AuthController",
        "method" => "getLogin",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/auth/logout",
        "class" => "\\Mabes\\Controllers\\AuthController",
        "method" => "getLogout",
        "auth" => true
    ],
    [
        "http_method" => "post",
        "route" => "/auth/login",
        "class" => "\\Mabes\\Controllers\\AuthController",
        "method" => "postLogin",
        "auth" => false
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/accounts",
        "class" => "\\Mabes\\Controllers\\AdminAccountController",
        "method" => "getListAccount",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/account/edit/:num",
        "class" => "\\Mabes\\Controllers\\AdminAccountController",
        "method" => "getEditAccount",
        "auth" => true
    ],
    [
        "http_method" => "post",
        "route" => "/administrator/account/edit/:num",
        "class" => "\\Mabes\\Controllers\\AdminAccountController",
        "method" => "postEditAccount",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/claim-rebates",
        "class" => "\\Mabes\\Controllers\\AdminClaimRebatesController",
        "method" => "getAdminClaimRebates",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/deposits",
        "class" => "\\Mabes\\Controllers\\AdminDepositController",
        "method" => "getAdminDeposits",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/deposits/processed",
        "class" => "\\Mabes\\Controllers\\AdminDepositController",
        "method" => "getProcessedDeposit",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/deposits/deleted",
        "class" => "\\Mabes\\Controllers\\AdminDepositController",
        "method" => "getDeletedDeposit",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/investor-password",
        "class" => "\\Mabes\\Controllers\\AdminInvestorPasswordController",
        "method" => "getAdminInvestorPasswords",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator",
        "class" => "\\Mabes\\Controllers\\AdminController",
        "method" => "index",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/withdrawal",
        "class" => "\\Mabes\\Controllers\\AdminWithdrawalController",
        "method" => "getAdminWithdrawal",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/withdrawal/processed",
        "class" => "\\Mabes\\Controllers\\AdminWithdrawalController",
        "method" => "getProcessedWithdrawal",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/withdrawal/deleted",
        "class" => "\\Mabes\\Controllers\\AdminWithdrawalController",
        "method" => "getDeletedWithdrawal",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/deposits/done/:num",
        "class" => "\\Mabes\\Controllers\\AdminDepositController",
        "method" => "getAdminDepositMarkAsDone",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/withdrawal/done/:num",
        "class" => "\\Mabes\\Controllers\\AdminWithdrawalController",
        "method" => "getAdminWithdrawalMarkAsDone",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/deposits/delete/:num",
        "class" => "\\Mabes\\Controllers\\AdminDepositController",
        "method" => "getAdminDepositMarkAsFailed",
        "auth" => true
    ],
    [
        "http_method" => "get",
        "route" => "/administrator/withdrawal/delete/:num",
        "class" => "\\Mabes\\Controllers\\AdminWithdrawalController",
        "method" => "getAdminWithdrawalMarkAsFailed",
        "auth" => true
    ]
];

// EOF
