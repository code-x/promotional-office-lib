<?php

class GetProductInformationResponse
{
    /**
     * @var ProductInformation $GetProductInformationResult
     */
    public $GetProductInformationResult = null;

    /**
     * @param ProductInformation $GetProductInformationResult
     */
    public function __construct($GetProductInformationResult)
    {
        $this->GetProductInformationResult = $GetProductInformationResult;
    }
}