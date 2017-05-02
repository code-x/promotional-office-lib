<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetProductPriceList
{
    /**
     * @var Promidata_Service_DTO_ProductPriceInformation[] $GetProductPriceListResult
     */
    public $GetProductPriceListResult = null;

    /**
     * @param Promidata_Service_DTO_ProductPriceInformation[] $GetProductPriceListResult
     */
    public function __construct($GetProductPriceListResult)
    {
        $this->GetProductPriceListResult = $GetProductPriceListResult;
    }
}