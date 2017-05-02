<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetProductConfiguration
{
    /**
     * @var Promidata_Service_DTO_GetProductConfigurationParameter $parameter
     */
    public $parameter = null;

    /**
     * @param Promidata_Service_DTO_GetProductConfigurationParameter $parameter
     */
    public function __construct(Promidata_Service_DTO_GetProductConfigurationParameter $parameter)
    {
        $this->parameter = $parameter;
    }
}