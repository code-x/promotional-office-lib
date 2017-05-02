<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_Update
{
    /**
     * @var Promidata_Service_DTO_ImportResult $UpdateResult
     */
    public $UpdateResult = null;

    /**
     * @param Promidata_Service_DTO_ImportResult $UpdateResult
     */
    public function __construct($UpdateResult)
    {
        $this->UpdateResult = $UpdateResult;
    }
}