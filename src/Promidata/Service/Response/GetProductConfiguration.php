<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetProductConfiguration
{
    /**
     * @var Promidata_Service_DTO_ProductConfiguration $GetProductConfigurationResult
     */
    public $GetProductConfigurationResult = null;

    /**
     * @param Promidata_Service_DTO_ProductConfiguration $GetProductConfigurationResult
     */
    public function __construct($GetProductConfigurationResult)
    {
        $this->GetProductConfigurationResult = $GetProductConfigurationResult;
    }
}