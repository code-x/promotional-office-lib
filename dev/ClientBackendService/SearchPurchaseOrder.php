<?php

class SearchPurchaseOrder
{
    /**
     * @var PurchaseOrderSearchParameter[] $purchaseOrderSearchParameters
     */
    public $purchaseOrderSearchParameters = null;

    /**
     * @param PurchaseOrderSearchParameter[] $purchaseOrderSearchParameters
     */
    public function __construct($purchaseOrderSearchParameters)
    {
        $this->purchaseOrderSearchParameters = $purchaseOrderSearchParameters;
    }
}