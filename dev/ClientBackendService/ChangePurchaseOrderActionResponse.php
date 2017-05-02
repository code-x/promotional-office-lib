<?php

class ChangePurchaseOrderActionResponse
{
    /**
     * @var ChangePurchaseOrderActionResult $ChangePurchaseOrderActionResult
     */
    public $ChangePurchaseOrderActionResult = null;

    /**
     * @param ChangePurchaseOrderActionResult $ChangePurchaseOrderActionResult
     */
    public function __construct($ChangePurchaseOrderActionResult)
    {
        $this->ChangePurchaseOrderActionResult = $ChangePurchaseOrderActionResult;
    }
}