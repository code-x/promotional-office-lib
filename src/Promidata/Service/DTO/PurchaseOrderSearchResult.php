<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_PurchaseOrderSearchResult
{
    /**
     * @var string $AssignedPurchaseOrderAction
     */
    public $AssignedPurchaseOrderAction = null;
    /**
     * @var boolean $IsCanceled
     */
    public $IsCanceled = null;
    /**
     * @var boolean $IsClosed
     */
    public $IsClosed = null;
    /**
     * @var int $PurchaseOrderNumber
     */
    public $PurchaseOrderNumber = null;
    /**
     * @var int $SupplierCreditorNumber
     */
    public $SupplierCreditorNumber = null;
    /**
     * @var string $SupplierName
     */
    public $SupplierName = null;

    /**
     * @param boolean $IsCanceled
     * @param boolean $IsClosed
     * @param int $PurchaseOrderNumber
     * @param int $SupplierCreditorNumber
     */
    public function __construct($IsCanceled, $IsClosed, $PurchaseOrderNumber, $SupplierCreditorNumber)
    {
        $this->IsCanceled = $IsCanceled;
        $this->IsClosed = $IsClosed;
        $this->PurchaseOrderNumber = $PurchaseOrderNumber;
        $this->SupplierCreditorNumber = $SupplierCreditorNumber;
    }
}