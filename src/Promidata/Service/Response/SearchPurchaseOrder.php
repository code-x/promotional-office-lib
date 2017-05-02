<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_SearchPurchaseOrder
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderSearchResult[] $SearchPurchaseOrderResult
     */
    public $SearchPurchaseOrderResult = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderSearchResult[] $SearchPurchaseOrderResult
     */
    public function __construct($SearchPurchaseOrderResult)
    {
        $this->SearchPurchaseOrderResult = $SearchPurchaseOrderResult;
    }
}