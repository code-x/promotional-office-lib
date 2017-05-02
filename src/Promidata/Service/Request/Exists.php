<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_Exists
{
    /**
     * @var Promidata_Service_DTO_ExistsArgument $argument
     */
    public $argument = null;

    /**
     * @param Promidata_Service_DTO_ExistsArgument $argument
     */
    public function __construct($argument)
    {
        $this->argument = $argument;
    }
}