<?php

class GetProductInformationByProductIdentifierResponse
{
    /**
     * @var ProductInformation $GetProductInformationByProductIdentifierResult
     */
    public $GetProductInformationByProductIdentifierResult = null;

    /**
     * @param ProductInformation $GetProductInformationByProductIdentifierResult
     */
    public function __construct($GetProductInformationByProductIdentifierResult)
    {
        $this->GetProductInformationByProductIdentifierResult = $GetProductInformationByProductIdentifierResult;
    }
}