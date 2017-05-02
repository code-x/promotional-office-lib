<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ImporterDefinition
{
    /**
     * @var guid $ImporterId
     */
    public $ImporterId = null;
    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @param guid $ImporterId
     */
    public function __construct($ImporterId)
    {
        $this->ImporterId = $ImporterId;
    }
}