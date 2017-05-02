<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ProductPriceInformation
{
    /**
     * @var string $ArticleNumber
     */
    public $ArticleNumber = null;
    /**
     * @var string $CustomerNumber
     */
    public $CustomerNumber = null;
    /**
     * @var float $CustomerSpecificSellingPrice
     */
    public $CustomerSpecificSellingPrice = null;
    /**
     * @var float $Discount
     */
    public $Discount = null;
    /**
     * @var int $Quantity
     */
    public $Quantity = null;
    /**
     * @var boolean $QuantityDependentPrice
     */
    public $QuantityDependentPrice = null;
    /**
     * @var float $RegularPrice
     */
    public $RegularPrice = null;

    /**
     * @param float $CustomerSpecificSellingPrice
     * @param float $Discount
     * @param int $Quantity
     * @param boolean $QuantityDependentPrice
     * @param float $RegularPrice
     */
    public function __construct(
        $CustomerSpecificSellingPrice,
        $Discount,
        $Quantity,
        $QuantityDependentPrice,
        $RegularPrice
    ) {
        $this->CustomerSpecificSellingPrice = $CustomerSpecificSellingPrice;
        $this->Discount = $Discount;
        $this->Quantity = $Quantity;
        $this->QuantityDependentPrice = $QuantityDependentPrice;
        $this->RegularPrice = $RegularPrice;
    }
}