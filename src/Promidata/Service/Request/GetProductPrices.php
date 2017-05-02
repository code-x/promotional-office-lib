<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetProductPrices
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $customerIdentifier
     */
    public $customerIdentifier = null;
    /**
     * @var Promidata_Service_DTO_ProductIdentifier $productIdentifier
     */
    public $productIdentifier = null;

    /**
     * @param Promidata_Service_DTO_CustomerIdentifier $customerIdentifier
     * @param Promidata_Service_DTO_ProductIdentifier $productIdentifier
     */
    public function __construct(Promidata_Service_DTO_CustomerIdentifier $customerIdentifier, Promidata_Service_DTO_ProductIdentifier $productIdentifier)
    {
        $this->customerIdentifier = $customerIdentifier;
        $this->productIdentifier = $productIdentifier;
    }
}