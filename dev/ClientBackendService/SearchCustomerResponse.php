<?php

class SearchCustomerResponse
{
    /**
     * @var CustomerSearchResult[] $SearchCustomerResult
     */
    public $SearchCustomerResult = null;

    /**
     * @param CustomerSearchResult[] $SearchCustomerResult
     */
    public function __construct($SearchCustomerResult)
    {
        $this->SearchCustomerResult = $SearchCustomerResult;
    }
}