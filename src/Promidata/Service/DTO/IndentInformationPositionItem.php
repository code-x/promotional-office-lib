<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_IndentInformationPositionItem
{
    /**
     * @var string $ArticleName
     */
    public $ArticleName = null;
    /**
     * @var string $ArticleOrderNumber
     */
    public $ArticleOrderNumber = null;
    /**
     * @var string $CalculatedPositionStateName
     */
    public $CalculatedPositionStateName = null;
    /**
     * @var string $ColorName
     */
    public $ColorName = null;
    /**
     * @var string $DeliveredPositionStateName
     */
    public $DeliveredPositionStateName = null;
    /**
     * @var string $DeliveryPositionStateName
     */
    public $DeliveryPositionStateName = null;
    /**
     * @var boolean $DirectDispatch
     */
    public $DirectDispatch = null;
    /**
     * @var dateTime $EarlyDeliveryDate
     */
    public $EarlyDeliveryDate = null;
    /**
     * @var string $IndentConfirmationText
     */
    public $IndentConfirmationText = null;
    /**
     * @var Promidata_Service_DTO_IndentInformationBettermentItem[] $IndentInformationBetterments
     */
    public $IndentInformationBetterments = null;
    /**
     * @var dateTime $LatestDeliveryDate
     */
    public $LatestDeliveryDate = null;
    /**
     * @var string $Option1IdName
     */
    public $Option1IdName = null;
    /**
     * @var string $Option2IdName
     */
    public $Option2IdName = null;
    /**
     * @var string $OrderPositionStateName
     */
    public $OrderPositionStateName = null;
    /**
     * @var string $OwnArticleNumber
     */
    public $OwnArticleNumber = null;
    /**
     * @var float $QuantityAmount
     */
    public $QuantityAmount = null;
    /**
     * @var float $QuantityCorrectedAmount
     */
    public $QuantityCorrectedAmount = null;
    /**
     * @var string $QuantityCorrectedUnit
     */
    public $QuantityCorrectedUnit = null;
    /**
     * @var string $QuantityUnit
     */
    public $QuantityUnit = null;
    /**
     * @var string $SizeName
     */
    public $SizeName = null;
    /**
     * @var string $SupplierName
     */
    public $SupplierName = null;

    /**
     * @param boolean $DirectDispatch
     * @param dateTime $EarlyDeliveryDate
     * @param dateTime $LatestDeliveryDate
     * @param float $QuantityAmount
     * @param float $QuantityCorrectedAmount
     */
    public function __construct($DirectDispatch, $EarlyDeliveryDate, $LatestDeliveryDate, $QuantityAmount, $QuantityCorrectedAmount)
    {
        $this->DirectDispatch = $DirectDispatch;
        $this->EarlyDeliveryDate = $EarlyDeliveryDate;
        $this->LatestDeliveryDate = $LatestDeliveryDate;
        $this->QuantityAmount = $QuantityAmount;
        $this->QuantityCorrectedAmount = $QuantityCorrectedAmount;
    }
}