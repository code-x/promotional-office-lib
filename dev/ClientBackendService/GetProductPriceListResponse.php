<?php

class GetProductPriceListResponse
{
    /**
     * @var ProductPriceInformation[] $GetProductPriceListResult
     */
    public $GetProductPriceListResult = null;

    /**
     * @param ProductPriceInformation[] $GetProductPriceListResult
     */
    public function __construct($GetProductPriceListResult)
    {
        $this->GetProductPriceListResult = $GetProductPriceListResult;
    }
}