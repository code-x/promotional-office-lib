<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetPurchaseOrderActionList
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderAction[] $GetPurchaseOrderActionListResult
     */
    public $GetPurchaseOrderActionListResult = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderAction[] $GetPurchaseOrderActionListResult
     */
    public function __construct($GetPurchaseOrderActionListResult)
    {
        $this->GetPurchaseOrderActionListResult = $GetPurchaseOrderActionListResult;
    }
}