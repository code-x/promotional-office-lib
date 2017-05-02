<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetProductInformationByProductIdentifier
{
    /**
     * @var Promidata_Service_DTO_ProductInformation $GetProductInformationByProductIdentifierResult
     */
    public $GetProductInformationByProductIdentifierResult = null;

    /**
     * @param Promidata_Service_DTO_ProductInformation $GetProductInformationByProductIdentifierResult
     */
    public function __construct($GetProductInformationByProductIdentifierResult)
    {
        $this->GetProductInformationByProductIdentifierResult = $GetProductInformationByProductIdentifierResult;
    }
}