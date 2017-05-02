<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetCustomerPriceList
{
    /**
     * @var Promidata_Service_DTO_ProductPriceInformation[] $GetCustomerPriceListResult
     */
    public $GetCustomerPriceListResult = null;

    /**
     * @param Promidata_Service_DTO_ProductPriceInformation[] $GetCustomerPriceListResult
     */
    public function __construct($GetCustomerPriceListResult)
    {
        $this->GetCustomerPriceListResult = $GetCustomerPriceListResult;
    }
}