<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_SimpleAddress
{
    /**
     * @var string $AddressType
     */
    public $AddressType = null;
    /**
     * @var string $City
     */
    public $City = null;
    /**
     * @var string $CountryName
     */
    public $CountryName = null;
    /**
     * @var boolean $IsMainAdress
     */
    public $IsMainAdress = null;
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
     * @var string $Name
     */
    public $Name = null;
    /**
     * @var string $NameAffex
     */
    public $NameAffex = null;
    /**
     * @var string $PostCode
     */
    public $PostCode = null;
    /**
     * @var string $Street
     */
    public $Street = null;
    /**
     * @var string $StreetNumber
     */
    public $StreetNumber = null;

    /**
     * @param boolean $IsMainAdress
     */
    public function __construct($IsMainAdress)
    {
        $this->IsMainAdress = $IsMainAdress;
    }
}