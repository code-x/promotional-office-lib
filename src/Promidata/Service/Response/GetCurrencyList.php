<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetCurrencyList
{
    /**
     * @var Promidata_Service_DTO_CurrencyItem[] $GetCurrencyListResult
     */
    public $GetCurrencyListResult = null;

    /**
     * @param Promidata_Service_DTO_CurrencyItem[] $GetCurrencyListResult
     */
    public function __construct($GetCurrencyListResult)
    {
        $this->GetCurrencyListResult = $GetCurrencyListResult;
    }
}