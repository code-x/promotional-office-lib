<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetIndentInformation
{
    /**
     * @var Promidata_Service_DTO_GetIndentInformationParameter $parameter
     */
    public $parameter = null;

    /**
     * @param Promidata_Service_DTO_GetIndentInformationParameter $parameter
     */
    public function __construct(Promidata_Service_DTO_GetIndentInformationParameter $parameter)
    {
        $this->parameter = $parameter;
    }
}