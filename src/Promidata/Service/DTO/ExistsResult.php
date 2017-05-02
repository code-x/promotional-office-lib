<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ExistsResult extends Promidata_Service_DTO_ImportDataBase
{
    /**
     * @var string $ExternId
     */
    public $ExternId = null;
    /**
     * @var boolean $Exists
     */
    public $Exists = null;

    /**
     * @param guid $ImporterIdentifier
     * @param boolean $Exists
     */
    public function __construct($ImporterIdentifier, $Exists)
    {
        parent::__construct($ImporterIdentifier);
        $this->Exists = $Exists;
    }
}