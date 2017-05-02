<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_SearchProduct
{
    /**
     * @var Promidata_Service_DTO_ProductSearchParameter[] $importdata
     */
    public $importdata = null;

    /**
     * @param Promidata_Service_DTO_ProductSearchParameter[] $importdata
     */
    public function __construct($importdata)
    {
        $this->importdata = $importdata;
    }
}