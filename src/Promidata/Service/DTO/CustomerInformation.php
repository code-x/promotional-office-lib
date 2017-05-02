<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_CustomerInformation
{
    /**
     * @var Promidata_Service_DTO_SimpleAddress[] $Adresses
     */
    public $Adresses = null;
    /**
     * @var int $AgentId
     */
    public $AgentId = null;
    /**
     * @var string $BankAccountBIC
     */
    public $BankAccountBIC = null;
    /**
     * @var string $BankAccountIBAN
     */
    public $BankAccountIBAN = null;
    /**
     * @var string $BankAccountOwner
     */
    public $BankAccountOwner = null;
    /**
     * @var Promidata_Service_DTO_ContactDetail[] $ContactDetails
     */
    public $ContactDetails = null;
    /**
     * @var Promidata_Service_DTO_ContactPersonInformation[] $ContactPersons
     */
    public $ContactPersons = null;
    /**
     * @var int $CreditLimitTotal
     */
    public $CreditLimitTotal = null;
    /**
     * @var float $CreditLimitUsed
     */
    public $CreditLimitUsed = null;
    /**
     * @var string $CurrencyName
     */
    public $CurrencyName = null;
    /**
     * @var int $DebitorNumber
     */
    public $DebitorNumber = null;
    /**
     * @var Promidata_Service_DTO_LocalizedItem $DeliveryTerm
     */
    public $DeliveryTerm = null;
    /**
     * @var Promidata_Service_DTO_LocalizedItem $DispatchType
     */
    public $DispatchType = null;
    /**
     * @var string $EMail
     */
    public $EMail = null;
    /**
     * @var string $Fax
     */
    public $Fax = null;
    /**
     * @var string $Homepage
     */
    public $Homepage = null;
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $IdentifierV1
     */
    public $IdentifierV1 = null;
    /**
     * @var boolean $IsActive
     */
    public $IsActive = null;
    /**
     * @var string $Language
     */
    public $Language = null;
    /**
     * @var string $Name
     */
    public $Name = null;
    /**
     * @var string $NameAffex
     */
    public $NameAffex = null;
    /**
     * @var string $Notice
     */
    public $Notice = null;
    /**
     * @var Promidata_Service_DTO_PaymentInformation[] $PaymentModes
     */
    public $PaymentModes = null;
    /**
     * @var string $Phone
     */
    public $Phone = null;
    /**
     * @var string $SalesTaxNumber
     */
    public $SalesTaxNumber = null;
    /**
     * @var string $SelfDefined1
     */
    public $SelfDefined1 = null;
    /**
     * @var string $SelfDefined2
     */
    public $SelfDefined2 = null;
    /**
     * @var string $SelfDefined3
     */
    public $SelfDefined3 = null;
    /**
     * @var string $Skype
     */
    public $Skype = null;
    /**
     * @var string $Warning
     */
    public $Warning = null;

    /**
     * @param int $AgentId
     * @param float $CreditLimitUsed
     * @param int $DebitorNumber
     * @param boolean $IsActive
     */
    public function __construct($AgentId, $CreditLimitUsed, $DebitorNumber, $IsActive)
    {
        $this->AgentId = $AgentId;
        $this->CreditLimitUsed = $CreditLimitUsed;
        $this->DebitorNumber = $DebitorNumber;
        $this->IsActive = $IsActive;
    }
}