<?php

class GetCustomerInformationListResponse
{
    /**
     * @var CustomerInformation[] $GetCustomerInformationListResult
     */
    public $GetCustomerInformationListResult = null;

    /**
     * @param CustomerInformation[] $GetCustomerInformationListResult
     */
    public function __construct($GetCustomerInformationListResult)
    {
        $this->GetCustomerInformationListResult = $GetCustomerInformationListResult;
    }
}