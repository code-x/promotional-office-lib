<?php

class SearchProductResponse
{
    /**
     * @var ProductSearchResult[] $SearchProductResult
     */
    public $SearchProductResult = null;

    /**
     * @param ProductSearchResult[] $SearchProductResult
     */
    public function __construct($SearchProductResult)
    {
        $this->SearchProductResult = $SearchProductResult;
    }
}