<?php

class ContactPersonInformation
{
    /**
     * @var ShowDescriptionItem[] $AdditionalMailingSigns
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
     * @var ContactDetail[] $ContactDetails
     */
    public $ContactDetails = null;
    /**
     * @var string $FirstName
     */
    public $FirstName = null;
    /**
     * @var GenderType $Gender
     */
    public $Gender = null;
    /**
     * @var CustomerIdentifier $IdentifierV1
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
     * @var ShowDescriptionItem[] $MailingSigns
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
     * @var ShowDescriptionItem[] $SecondaryMailingSigns
     */
    public $SecondaryMailingSigns = null;

    /**
     * @param GenderType $Gender
     * @param boolean $IsMailRecipient
     * @param boolean $IsMain
     */
    public function __construct($Gender, $IsMailRecipient, $IsMain)
    {
        $this->Gender = $Gender;
        $this->IsMailRecipient = $IsMailRecipient;
        $this->IsMain = $IsMain;
    }
}