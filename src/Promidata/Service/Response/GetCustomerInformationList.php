<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetCustomerInformationList
{
    /**
     * @var Promidata_Service_DTO_CustomerInformation[] $GetCustomerInformationListResult
     */
    public $GetCustomerInformationListResult = null;

    /**
     * @param Promidata_Service_DTO_CustomerInformation[] $GetCustomerInformationListResult
     */
    public function __construct($GetCustomerInformationListResult)
    {
        $this->GetCustomerInformationListResult = $GetCustomerInformationListResult;
    }
}