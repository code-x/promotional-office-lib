<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetProductInformation
{
    /**
     * @var Promidata_Service_DTO_ProductInformation $GetProductInformationResult
     */
    public $GetProductInformationResult = null;

    /**
     * @param Promidata_Service_DTO_ProductInformation $GetProductInformationResult
     */
    public function __construct($GetProductInformationResult)
    {
        $this->GetProductInformationResult = $GetProductInformationResult;
    }
}