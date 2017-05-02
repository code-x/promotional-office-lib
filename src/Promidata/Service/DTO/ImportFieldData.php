<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ImportFieldData
{
    /**
     * @var string $FieldData
     */
    public $FieldData = null;
    /**
     * @var string $FieldIdentifier
     */
    public $FieldIdentifier = null;
    /**
     * @var Promidata_Service_DTO_KeyValuePairOfstringstring[] $Options
     */
    public $Options = null;

    public function __construct($FieldIdentifier = null, $FieldData = null, $Options = null)
    {
        $this->FieldIdentifier = $FieldIdentifier;
        $this->FieldData = $FieldData;
        $this->Options = $Options;
    }
}