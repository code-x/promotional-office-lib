<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_DataSelector
{
    /**
     * @var string $SelectorType
     */
    public $SelectorType = null;
    /**
     * @var Promidata_Service_DTO_KeyValueOfstringanyType[] $SelectorValues
     */
    public $SelectorValues = null;

    /**
     * @param string $SelectorType
     */
    public function __construct($SelectorType)
    {
        $this->SelectorType = $SelectorType;
    }

    public function add($Key, $Value)
    {
        $this->SelectorValues[] = new Promidata_Service_DTO_KeyValueOfstringanyType($Key, $Value);
    }
}