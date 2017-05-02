<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ImporterDetails
{
    /**
     * @var Promidata_Service_DTO_ImportFieldInfo[] $FieldInfos
     */
    public $FieldInfos = null;
    /**
     * @var guid $ImporterId
     */
    public $ImporterId = null;

    /**
     * @param guid $ImporterId
     */
    public function __construct($ImporterId)
    {
        $this->ImporterId = $ImporterId;
    }
}