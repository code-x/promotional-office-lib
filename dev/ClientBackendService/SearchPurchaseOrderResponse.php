<?php

class SearchPurchaseOrderResponse
{
    /**
     * @var PurchaseOrderSearchResult[] $SearchPurchaseOrderResult
     */
    public $SearchPurchaseOrderResult = null;

    /**
     * @param PurchaseOrderSearchResult[] $SearchPurchaseOrderResult
     */
    public function __construct($SearchPurchaseOrderResult)
    {
        $this->SearchPurchaseOrderResult = $SearchPurchaseOrderResult;
    }
}