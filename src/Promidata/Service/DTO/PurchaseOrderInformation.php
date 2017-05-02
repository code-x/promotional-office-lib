<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_PurchaseOrderInformation
{
    /**
     * @var string $AdditionalCostCurrency
     */
    public $AdditionalCostCurrency = null;
    /**
     * @var string $AdditionalCostText
     */
    public $AdditionalCostText = null;
    /**
     * @var string $BelongsToOrdersString
     */
    public $BelongsToOrdersString = null;
    /**
     * @var float $BuyingPriceTotal
     */
    public $BuyingPriceTotal = null;
    /**
     * @var dateTime $ClosingDate
     */
    public $ClosingDate = null;
    /**
     * @var float $CurrencyFactor
     */
    public $CurrencyFactor = null;
    /**
     * @var string $CurrencyName
     */
    public $CurrencyName = null;
    /**
     * @var Promidata_Service_DTO_LocalizedItem $DeliveryTerm
     */
    public $DeliveryTerm = null;
    /**
     * @var Promidata_Service_DTO_ComplexAddress $DispatchAddress
     */
    public $DispatchAddress = null;
    /**
     * @var Promidata_Service_DTO_LocalizedItem $DispatchType
     */
    public $DispatchType = null;
    /**
     * @var string $FooterText
     */
    public $FooterText = null;
    /**
     * @var string $HeaderText
     */
    public $HeaderText = null;
    /**
     * @var Promidata_Service_DTO_PurchaseOrderIdentifier $IdentifierV1
     */
    public $IdentifierV1 = null;
    /**
     * @var dateTime $IncomingDate
     */
    public $IncomingDate = null;
    /**
     * @var string $InternOrderNotice
     */
    public $InternOrderNotice = null;
    /**
     * @var boolean $IsCanceled
     */
    public $IsCanceled = null;
    /**
     * @var boolean $IsComplete
     */
    public $IsComplete = null;
    /**
     * @var boolean $IsDirectDispatch
     */
    public $IsDirectDispatch = null;
    /**
     * @var boolean $IsStockOrder
     */
    public $IsStockOrder = null;
    /**
     * @var string $Notice
     */
    public $Notice = null;
    /**
     * @var dateTime $OrderDate
     */
    public $OrderDate = null;
    /**
     * @var string $OwnOrderNumber
     */
    public $OwnOrderNumber = null;
    /**
     * @var Promidata_Service_DTO_PaymentInformation[] $PaymentModes
     */
    public $PaymentModes = null;
    /**
     * @var Promidata_Service_DTO_ComplexAddress $PostAddress
     */
    public $PostAddress = null;
    /**
     * @var Promidata_Service_DTO_PurchaseOrderPositionItem[] $PurchaseOrderPositions
     */
    public $PurchaseOrderPositions = null;
    /**
     * @var string $SalesOrderNumbers
     */
    public $SalesOrderNumbers = null;
    /**
     * @var dateTime $SendingOutDate
     */
    public $SendingOutDate = null;
    /**
     * @var int $SupplierCreditorNumber
     */
    public $SupplierCreditorNumber = null;
    /**
     * @var dateTime $SupplierDate
     */
    public $SupplierDate = null;
    /**
     * @var string $SupplierInvoiceNumber
     */
    public $SupplierInvoiceNumber = null;
    /**
     * @var string $SupplierName
     */
    public $SupplierName = null;
    /**
     * @var dateTime $WishDeliveryDate
     */
    public $WishDeliveryDate = null;

    /**
     * @param float $BuyingPriceTotal
     * @param float $CurrencyFactor
     * @param boolean $IsCanceled
     * @param boolean $IsComplete
     * @param boolean $IsDirectDispatch
     * @param boolean $IsStockOrder
     * @param dateTime $OrderDate
     * @param int $SupplierCreditorNumber
     * @param dateTime $WishDeliveryDate
     */
    public function __construct(
        $BuyingPriceTotal,
        $CurrencyFactor,
        $IsCanceled,
        $IsComplete,
        $IsDirectDispatch,
        $IsStockOrder,
        $OrderDate,
        $SupplierCreditorNumber,
        $WishDeliveryDate
    ) {
        $this->BuyingPriceTotal = $BuyingPriceTotal;
        $this->CurrencyFactor = $CurrencyFactor;
        $this->IsCanceled = $IsCanceled;
        $this->IsComplete = $IsComplete;
        $this->IsDirectDispatch = $IsDirectDispatch;
        $this->IsStockOrder = $IsStockOrder;
        $this->OrderDate = $OrderDate;
        $this->SupplierCreditorNumber = $SupplierCreditorNumber;
        $this->WishDeliveryDate = $WishDeliveryDate;
    }
}