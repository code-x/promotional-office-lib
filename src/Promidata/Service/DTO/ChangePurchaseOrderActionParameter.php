<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ChangePurchaseOrderActionParameter
{
    /**
     * @var Promidata_Service_DTO_PurchaseOrderIdentifier $IdentifierV1
     */
    public $IdentifierV1 = null;
    /**
     * @var string $NewPurchaseOrderActionName
     */
    public $NewPurchaseOrderActionName = null;

    /**
     * @param Promidata_Service_DTO_PurchaseOrderIdentifier $IdentifierV1
     * @param string $NewPurchaseOrderActionName
     */
    public function __construct($IdentifierV1 = null, $NewPurchaseOrderActionName = null)
    {
        $this->IdentifierV1 = $IdentifierV1;
        $this->NewPurchaseOrderActionName = $NewPurchaseOrderActionName;
    }
}