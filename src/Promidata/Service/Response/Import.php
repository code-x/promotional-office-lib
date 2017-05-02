<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_Import
{
    /**
     * @var Promidata_Service_DTO_ImportResult $ImportResult
     */
    public $ImportResult = null;

    /**
     * @param Promidata_Service_DTO_ImportResult $ImportResult
     */
    public function __construct($ImportResult)
    {
        $this->ImportResult = $ImportResult;
    }
}