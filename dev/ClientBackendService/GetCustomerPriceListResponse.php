<?php

class GetCustomerPriceListResponse
{
    /**
     * @var ProductPriceInformation[] $GetCustomerPriceListResult
     */
    public $GetCustomerPriceListResult = null;

    /**
     * @param ProductPriceInformation[] $GetCustomerPriceListResult
     */
    public function __construct($GetCustomerPriceListResult)
    {
        $this->GetCustomerPriceListResult = $GetCustomerPriceListResult;
    }
}