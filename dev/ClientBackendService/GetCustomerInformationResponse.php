<?php

class GetCustomerInformationResponse
{
    /**
     * @var CustomerInformation $GetCustomerInformationResult
     */
    public $GetCustomerInformationResult = null;

    /**
     * @param CustomerInformation $GetCustomerInformationResult
     */
    public function __construct($GetCustomerInformationResult)
    {
        $this->GetCustomerInformationResult = $GetCustomerInformationResult;
    }
}