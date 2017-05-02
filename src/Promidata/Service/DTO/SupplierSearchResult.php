<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_SupplierSearchResult
{
    /**
     * @var int $CreditorNumber
     */
    public $CreditorNumber = null;
    /**
     * @var boolean $IsActive
     */
    public $IsActive = null;
    /**
     * @var guid $SupplierIdentifier
     */
    public $SupplierIdentifier = null;
    /**
     * @var string $SupplierName
     */
    public $SupplierName = null;

    /**
     * @param int $CreditorNumber
     * @param boolean $IsActive
     * @param guid $SupplierIdentifier
     */
    public function __construct($CreditorNumber, $IsActive, $SupplierIdentifier)
    {
        $this->CreditorNumber = $CreditorNumber;
        $this->IsActive = $IsActive;
        $this->SupplierIdentifier = $SupplierIdentifier;
    }
}