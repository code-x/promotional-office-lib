<?php

class GetPurchaseOrderInformation
{
    /**
     * @var PurchaseOrderIdentifier $identifierV1
     */
    public $identifierV1 = null;

    /**
     * @param PurchaseOrderIdentifier $identifierV1
     */
    public function __construct($identifierV1)
    {
        $this->identifierV1 = $identifierV1;
    }
}