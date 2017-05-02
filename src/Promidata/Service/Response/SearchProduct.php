<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_SearchProduct
{
    /**
     * @var Promidata_Service_DTO_ProductSearchResult[] $SearchProductResult
     */
    public $SearchProductResult = null;

    /**
     * @param Promidata_Service_DTO_ProductSearchResult[] $SearchProductResult
     */
    public function __construct($SearchProductResult)
    {
        $this->SearchProductResult = $SearchProductResult;
    }
}