<?php

class SearchSupplierResponse
{
    /**
     * @var SupplierSearchResult[] $SearchSupplierResult
     */
    public $SearchSupplierResult = null;

    /**
     * @param SupplierSearchResult[] $SearchSupplierResult
     */
    public function __construct($SearchSupplierResult)
    {
        $this->SearchSupplierResult = $SearchSupplierResult;
    }
}