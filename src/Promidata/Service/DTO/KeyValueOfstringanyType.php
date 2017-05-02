<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_KeyValueOfstringanyType
{
    /**
     * @var string $Key
     */
    public $Key = null;
    /**
     * @var anyType $Value
     */
    public $Value = null;

    /**
     * @param string $Key
     * @param anyType $Value
     */
    public function __construct($Key, $Value)
    {
        $this->Key = $Key;
        $this->Value = new SoapVar($Value, XSD_ANYTYPE, 'string', 'http://www.w3.org/2001/XMLSchema', 'Value');
    }
}