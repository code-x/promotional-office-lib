<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_PurchaseOrderIdentifier
{
    /**
     * @var int $PurchaseOrderNumber
     */
    public $PurchaseOrderNumber = null;

    /**
     * @param int $PurchaseOrderNumber
     */
    public function __construct($PurchaseOrderNumber = null)
    {
        $this->PurchaseOrderNumber = $PurchaseOrderNumber;
    }
}