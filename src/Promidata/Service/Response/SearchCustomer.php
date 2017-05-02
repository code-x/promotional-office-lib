<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_SearchCustomer
{
    /**
     * @var Promidata_Service_DTO_CustomerSearchResult[] $SearchCustomerResult
     */
    public $SearchCustomerResult = null;

    /**
     * @param Promidata_Service_DTO_CustomerSearchResult[] $SearchCustomerResult
     */
    public function __construct($SearchCustomerResult)
    {
        $this->SearchCustomerResult = $SearchCustomerResult;
    }
}