<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_Exists
{
    /**
     * @var Promidata_Service_DTO_ExistsResult $ExistsResult
     */
    public $ExistsResult = null;

    /**
     * @param Promidata_Service_DTO_ExistsResult $ExistsResult
     */
    public function __construct($ExistsResult)
    {
        $this->ExistsResult = $ExistsResult;
    }
}