<?php

class PurchaseOrderIdentifier
{
    /**
     * @var int $PurchaseOrderNumber
     */
    public $PurchaseOrderNumber = null;

    /**
     * @param int $PurchaseOrderNumber
     */
    public function __construct($PurchaseOrderNumber)
    {
        $this->PurchaseOrderNumber = $PurchaseOrderNumber;
    }
}