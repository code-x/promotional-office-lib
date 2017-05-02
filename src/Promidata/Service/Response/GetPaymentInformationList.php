<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetPaymentInformationList
{
    /**
     * @var Promidata_Service_DTO_PaymentInformation[] $GetPaymentInformationListResult
     */
    public $GetPaymentInformationListResult = null;

    /**
     * @param Promidata_Service_DTO_PaymentInformation[] $GetPaymentInformationListResult
     */
    public function __construct($GetPaymentInformationListResult)
    {
        $this->GetPaymentInformationListResult = $GetPaymentInformationListResult;
    }
}