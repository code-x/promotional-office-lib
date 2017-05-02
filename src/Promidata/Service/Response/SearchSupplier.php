<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_SearchSupplier
{
    /**
     * @var Promidata_Service_DTO_SupplierSearchResult[] $SearchSupplierResult
     */
    public $SearchSupplierResult = null;

    /**
     * @param Promidata_Service_DTO_SupplierSearchResult[] $SearchSupplierResult
     */
    public function __construct($SearchSupplierResult)
    {
        $this->SearchSupplierResult = $SearchSupplierResult;
    }
}