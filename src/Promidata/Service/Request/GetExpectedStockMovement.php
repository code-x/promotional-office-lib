<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetExpectedStockMovement
{
    /**
     * @var Promidata_Service_DTO_ProductIdentifier $productIdentifier
     */
    public $productIdentifier = null;

    /**
     * @param Promidata_Service_DTO_ProductIdentifier $productIdentifier
     */
    public function __construct(Promidata_Service_DTO_ProductIdentifier $productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }
}