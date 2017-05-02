<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_CustomerIdentifier
{
    /**
     * @var int $CustomerId
     */
    public $CustomerId = null;
    /**
     * @var guid $CustomerIdentifier
     */
    public $CustomerIdentifier = null;
    /**
     * @var string $CustomerNumber
     */
    public $CustomerNumber = null;
    /**
     * @var string $ExternId
     */
    public $ExternId = null;
    /**
     * @var string $ImportSource
     */
    public $ImportSource = null;

    /**
     * @param guid $CustomerId
     * @param string $CustomerNumber
     */
    public function __construct($CustomerId = null, $CustomerNumber = null)
    {
        $this->CustomerId = null;
        $this->CustomerNumber = null;
    }
}