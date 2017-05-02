<?php

class GetCurrencyListResponse
{
    /**
     * @var CurrencyItem[] $GetCurrencyListResult
     */
    public $GetCurrencyListResult = null;

    /**
     * @param CurrencyItem[] $GetCurrencyListResult
     */
    public function __construct($GetCurrencyListResult)
    {
        $this->GetCurrencyListResult = $GetCurrencyListResult;
    }
}