<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetPurchaseOrderInformation
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderIdentifier $identifierV1
     */
    public $identifierV1 = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderIdentifier $identifierV1
     */
    public function __construct(Promidata_Service_DTO_PurchaseOrderIdentifier $identifierV1)
    {
        $this->identifierV1 = $identifierV1;
    }
}