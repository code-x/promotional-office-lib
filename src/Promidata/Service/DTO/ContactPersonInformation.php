<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ContactPersonInformation
{
    /**
     * @var Promidata_Service_DTO_ShowDescriptionItem[] $AdditionalMailingSigns
     */
    public $AdditionalMailingSigns = null;
    /**
     * @var string $AlternativeSalutation
     */
    public $AlternativeSalutation = null;
    /**
     * @var dateTime $Birthday
     */
    public $Birthday = null;
    /**
     * @var Promidata_Service_DTO_ContactDetail[] $ContactDetails
     */
    public $ContactDetails = null;
    /**
     * @var string $FirstName
     */
    public $FirstName = null;
    /**
     * @var Promidata_Service_Enum_GenderType $Gender
     */
    public $Gender = null;
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $IdentifierV1
     */
    public $IdentifierV1 = null;
    /**
     * @var string $Initials
     */
    public $Initials = null;
    /**
     * @var boolean $IsMailRecipient
     */
    public $IsMailRecipient = null;
    /**
     * @var boolean $IsMain
     */
    public $IsMain = null;
    /**
     * @var string $Language
     */
    public $Language = null;
    /**
     * @var string $LastName
     */
    public $LastName = null;
    /**
     * @var Promidata_Service_DTO_ShowDescriptionItem[] $MailingSigns
     */
    public $MailingSigns = null;
    /**
     * @var string $NameAffex
     */
    public $NameAffex = null;
    /**
     * @var string $Notice
     */
    public $Notice = null;
    /**
     * @var string $Salutation
     */
    public $Salutation = null;
    /**
     * @var Promidata_Service_DTO_ShowDescriptionItem[] $SecondaryMailingSigns
     */
    public $SecondaryMailingSigns = null;

    /**
     * @param Promidata_Service_Enum_GenderType $Gender
     * @param boolean $IsMailRecipient
     * @param boolean $IsMain
     */
    public function __construct(Promidata_Service_Enum_GenderType $Gender, $IsMailRecipient, $IsMain)
    {
        $this->Gender = $Gender;
        $this->IsMailRecipient = $IsMailRecipient;
        $this->IsMain = $IsMain;
    }
}