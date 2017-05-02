<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetProductPrices
{
    /**
     * @var Promidata_Service_DTO_ProductPriceInformation[] $GetProductPricesResult
     */
    public $GetProductPricesResult = null;

    /**
     * @param Promidata_Service_DTO_ProductPriceInformation[] $GetProductPricesResult
     */
    public function __construct($GetProductPricesResult)
    {
        $this->GetProductPricesResult = $GetProductPricesResult;
    }
}