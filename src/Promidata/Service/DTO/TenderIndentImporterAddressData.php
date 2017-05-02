<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_TenderIndentImporterAddressData
{
    /**
     * @var string $AlternativeSalutation
     */
    public $AlternativeSalutation = null;
    /**
     * @var string $City
     */
    public $City = null;
    /**
     * @var string $CompanyName
     */
    public $CompanyName = null;
    /**
     * @var string $CompanyNameAffex
     */
    public $CompanyNameAffex = null;
    /**
     * @var string $CountryIsoCode
     */
    public $CountryIsoCode = null;
    /**
     * @var string $DispatchTip
     */
    public $DispatchTip = null;
    /**
     * @var string $EMail
     */
    public $EMail = null;
    /**
     * @var string $FaxNumber
     */
    public $FaxNumber = null;
    /**
     * @var string $FirstName
     */
    public $FirstName = null;
    /**
     * @var Promidata_Service_Enum_GenderType $Gender
     */
    public $Gender = null;
    /**
     * @var string $Initial
     */
    public $Initial = null;
    /**
     * @var string $Language
     */
    public $Language = null;
    /**
     * @var string $LastName
     */
    public $LastName = null;
    /**
     * @var string $Line1
     */
    public $Line1 = null;
    /**
     * @var string $Line2
     */
    public $Line2 = null;
    /**
     * @var string $Line3
     */
    public $Line3 = null;
    /**
     * @var string $PhoneNumber
     */
    public $PhoneNumber = null;
    /**
     * @var string $PostCode
     */
    public $PostCode = null;
    /**
     * @var string $Salutation
     */
    public $Salutation = null;
    /**
     * @var string $Street
     */
    public $Street = null;
    /**
     * @var string $StreetNumber
     */
    public $StreetNumber = null;
    /**
     * @var string $UstId
     */
    public $UstId = null;

    /**
     * @param Promidata_Service_Enum_GenderType $Gender
     */
    public function __construct(Promidata_Service_Enum_GenderType $Gender)
    {
        $this->Gender = $Gender;
    }
}