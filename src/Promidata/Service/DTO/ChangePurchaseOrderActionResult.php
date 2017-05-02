<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ChangePurchaseOrderActionResult
{
    /**
     * @var string $Error
     */
    public $Error = null;
    /**
     * @var Promidata_Service_DTO_PurchaseOrderIdentifier $IdentifierV1
     */
    public $IdentifierV1 = null;

    public function __construct()
    {
    }
}