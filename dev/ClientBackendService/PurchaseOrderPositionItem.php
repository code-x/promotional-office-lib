<?php

class PurchaseOrderPositionItem
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
     * @var string $ArticleOrderText
     */
    public $ArticleOrderText = null;
    /**
     * @var float $BuyingPricePosition
     */
    public $BuyingPricePosition = null;
    /**
     * @var float $BuyingPriceTotal
     */
    public $BuyingPriceTotal = null;
    /**
     * @var string $ColorName
     */
    public $ColorName = null;
    /**
     * @var dateTime $EarlyDeliveryDate
     */
    public $EarlyDeliveryDate = null;
    /**
     * @var dateTime $LatestDeliveryDate
     */
    public $LatestDeliveryDate = null;
    /**
     * @var float $OrderedQuantity
     */
    public $OrderedQuantity = null;
    /**
     * @var float $OrderedQuantityAmount
     */
    public $OrderedQuantityAmount = null;
    /**
     * @var string $OrderedQuantityUnit
     */
    public $OrderedQuantityUnit = null;
    /**
     * @var PurchaseOrderBettermentItem[] $PurchaseOrderBetterments
     */
    public $PurchaseOrderBetterments = null;
    /**
     * @var string $SizeName
     */
    public $SizeName = null;

    /**
     * @param float $BuyingPricePosition
     * @param float $BuyingPriceTotal
     * @param dateTime $EarlyDeliveryDate
     * @param dateTime $LatestDeliveryDate
     * @param float $OrderedQuantity
     * @param float $OrderedQuantityAmount
     */
    public function __construct($BuyingPricePosition, $BuyingPriceTotal, $EarlyDeliveryDate, $LatestDeliveryDate, $OrderedQuantity, $OrderedQuantityAmount)
    {
        $this->BuyingPricePosition = $BuyingPricePosition;
        $this->BuyingPriceTotal = $BuyingPriceTotal;
        $this->EarlyDeliveryDate = $EarlyDeliveryDate;
        $this->LatestDeliveryDate = $LatestDeliveryDate;
        $this->OrderedQuantity = $OrderedQuantity;
        $this->OrderedQuantityAmount = $OrderedQuantityAmount;
    }
}