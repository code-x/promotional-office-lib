<?php

class GetProductPricesResponse
{
    /**
     * @var ProductPriceInformation[] $GetProductPricesResult
     */
    public $GetProductPricesResult = null;

    /**
     * @param ProductPriceInformation[] $GetProductPricesResult
     */
    public function __construct($GetProductPricesResult)
    {
        $this->GetProductPricesResult = $GetProductPricesResult;
    }
}