<?php

class GetPurchaseOrderActionListResponse
{
    /**
     * @var PurchaseOrderAction[] $GetPurchaseOrderActionListResult
     */
    public $GetPurchaseOrderActionListResult = null;

    /**
     * @param PurchaseOrderAction[] $GetPurchaseOrderActionListResult
     */
    public function __construct($GetPurchaseOrderActionListResult)
    {
        $this->GetPurchaseOrderActionListResult = $GetPurchaseOrderActionListResult;
    }
}