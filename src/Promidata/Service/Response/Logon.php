<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_Logon
{
    /**
     * @var string $LogonResult
     */
    public $LogonResult = null;

    /**
     * @param string $LogonResult
     */
    public function __construct($LogonResult)
    {
        $this->LogonResult = $LogonResult;
    }
}