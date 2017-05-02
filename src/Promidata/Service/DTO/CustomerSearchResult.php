<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_CustomerSearchResult
{
    /**
     * @var guid $CustomerIdentifier
     */
    public $CustomerIdentifier = null;
    /**
     * @var string $CustomerName
     */
    public $CustomerName = null;
    /**
     * @var int $CustomerNumber
     */
    public $CustomerNumber = null;
    /**
     * @var int $DebitorNumber
     */
    public $DebitorNumber = null;
    /**
     * @var boolean $IsActive
     */
    public $IsActive = null;

    /**
     * @param guid $CustomerIdentifier
     * @param int $CustomerNumber
     * @param int $DebitorNumber
     * @param boolean $IsActive
     */
    public function __construct($CustomerIdentifier, $CustomerNumber, $DebitorNumber, $IsActive)
    {
        $this->CustomerIdentifier = $CustomerIdentifier;
        $this->CustomerNumber = $CustomerNumber;
        $this->DebitorNumber = $DebitorNumber;
        $this->IsActive = $IsActive;
    }
}