<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_TenderIndentImporterRelayData
{
    /**
     * @var boolean $IsCompletePrice
     */
    public $IsCompletePrice = null;
    /**
     * @var int $Quantity
     */
    public $Quantity = null;
    /**
     * @var float $SellingPricePerUnit
     */
    public $SellingPricePerUnit = null;

    /**
     * @param boolean $IsCompletePrice
     * @param int $Quantity
     * @param float $SellingPricePerUnit
     */
    public function __construct($IsCompletePrice, $Quantity, $SellingPricePerUnit)
    {
        $this->IsCompletePrice = $IsCompletePrice;
        $this->Quantity = $Quantity;
        $this->SellingPricePerUnit = $SellingPricePerUnit;
    }
}