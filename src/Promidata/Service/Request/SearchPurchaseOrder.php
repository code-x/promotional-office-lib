<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_SearchPurchaseOrder
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderSearchParameter[] $purchaseOrderSearchParameters
     */
    public $purchaseOrderSearchParameters = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderSearchParameter[] $purchaseOrderSearchParameters
     */
    public function __construct($purchaseOrderSearchParameters)
    {
        $this->purchaseOrderSearchParameters = $purchaseOrderSearchParameters;
    }
}