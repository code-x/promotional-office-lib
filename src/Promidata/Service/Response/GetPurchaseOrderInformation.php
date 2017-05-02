<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetPurchaseOrderInformation
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderInformation $GetPurchaseOrderInformationResult
     */
    public $GetPurchaseOrderInformationResult = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderInformation $GetPurchaseOrderInformationResult
     */
    public function __construct($GetPurchaseOrderInformationResult)
    {
        $this->GetPurchaseOrderInformationResult = $GetPurchaseOrderInformationResult;
    }
}