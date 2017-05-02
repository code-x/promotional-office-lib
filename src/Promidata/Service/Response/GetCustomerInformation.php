<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetCustomerInformation
{
    /**
     * @var Promidata_Service_DTO_CustomerInformation $GetCustomerInformationResult
     */
    public $GetCustomerInformationResult = null;

    /**
     * @param Promidata_Service_DTO_CustomerInformation $GetCustomerInformationResult
     */
    public function __construct($GetCustomerInformationResult)
    {
        $this->GetCustomerInformationResult = $GetCustomerInformationResult;
    }
}