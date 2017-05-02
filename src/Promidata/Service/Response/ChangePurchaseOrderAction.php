<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_ChangePurchaseOrderAction
{
    /**
     * @var Promidata_Service_DTO_ChangePurchaseOrderActionResult $ChangePurchaseOrderActionResult
     */
    public $ChangePurchaseOrderActionResult = null;

    /**
     * @param Promidata_Service_DTO_ChangePurchaseOrderActionResult $ChangePurchaseOrderActionResult
     */
    public function __construct($ChangePurchaseOrderActionResult)
    {
        $this->ChangePurchaseOrderActionResult = $ChangePurchaseOrderActionResult;
    }
}