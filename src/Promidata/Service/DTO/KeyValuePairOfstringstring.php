<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_KeyValuePairOfstringstring
{
    /**
     * @var string $key
     */
    public $key = null;
    /**
     * @var string $value
     */
    public $value = null;

    /**
     * @param string $key
     * @param string $value
     */
    public function __construct($key = null, $value = null)
    {
        $this->key = $key;
        $this->value = $value;
    }
}