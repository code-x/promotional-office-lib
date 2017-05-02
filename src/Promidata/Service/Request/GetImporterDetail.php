<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetImporterDetail
{
    /**
     * @var guid $importerId
     */
    public $importerId = null;

    /**
     * @param guid $importerId
     */
    public function __construct($importerId)
    {
        $this->importerId = $importerId;
    }
}