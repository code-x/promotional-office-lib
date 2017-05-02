<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetProductInformationByProductIdentifier
{
    /**
     * @var Promidata_Service_DTO_ProductIdentifier $productIdentifier
     */
    public $productIdentifier = null;

    /**
     * @param Promidata_Service_DTO_ProductIdentifier $productIdentifier
     */
    public function __construct(Promidata_Service_DTO_ProductIdentifier $productIdentifier = null)
    {
        $this->productIdentifier = $productIdentifier;
    }
}