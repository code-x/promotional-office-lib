<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ImportDataBase
{
    /**
     * @var guid $ImporterIdentifier
     */
    public $ImporterIdentifier = null;
    /**
     * For internal use only, you can ommit the value
     *
     * @var guid $DatabaseIdentifier
     */
    public $DatabaseIdentifier = null;

    /**
     * @param guid $ImporterIdentifier
     * @param guid $DatabaseIdentifier
     */
    public function __construct($ImporterIdentifier, $DatabaseIdentifier = '00000000-0000-0000-0000-000000000000')
    {
        $this->ImporterIdentifier = $ImporterIdentifier;
        $this->DatabaseIdentifier = $DatabaseIdentifier;
    }
}