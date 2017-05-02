<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_ChangePurchaseOrderAction
{
    /**
     * @var Promidata_Service_DTO_ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     */
    public $changePurchaseOrderActionParameter = null;

    /**
     * @param Promidata_Service_DTO_ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter
     */
    public function __construct(Promidata_Service_DTO_ChangePurchaseOrderActionParameter $changePurchaseOrderActionParameter)
    {
        $this->changePurchaseOrderActionParameter = $changePurchaseOrderActionParameter;
    }
}