<?php

class ChangePurchaseOrderAction
{
    /**
     * @var ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     */
    public $changePurchaseOrderActionParameter = null;

    /**
     * @param ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     */
    public function __construct($changePurchaseOrderActionParameter)
    {
        $this->changePurchaseOrderActionParameter = $changePurchaseOrderActionParameter;
    }
}