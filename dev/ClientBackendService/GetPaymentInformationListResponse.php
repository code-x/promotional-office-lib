<?php

class GetPaymentInformationListResponse
{
    /**
     * @var PaymentInformation[] $GetPaymentInformationListResult
     */
    public $GetPaymentInformationListResult = null;

    /**
     * @param PaymentInformation[] $GetPaymentInformationListResult
     */
    public function __construct($GetPaymentInformationListResult)
    {
        $this->GetPaymentInformationListResult = $GetPaymentInformationListResult;
    }
}