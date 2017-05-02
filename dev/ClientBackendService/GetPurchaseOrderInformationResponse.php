<?php

class GetPurchaseOrderInformationResponse
{
    /**
     * @var PurchaseOrderInformation $GetPurchaseOrderInformationResult
     */
    public $GetPurchaseOrderInformationResult = null;

    /**
     * @param PurchaseOrderInformation $GetPurchaseOrderInformationResult
     */
    public function __construct($GetPurchaseOrderInformationResult)
    {
        $this->GetPurchaseOrderInformationResult = $GetPurchaseOrderInformationResult;
    }
}