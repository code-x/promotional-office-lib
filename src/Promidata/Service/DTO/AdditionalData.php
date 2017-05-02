<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_AdditionalData
{
    /**
     * @var string $AdditionalDataKey
     */
    public $AdditionalDataKey = null;
    /**
     * @var string $Value
     */
    public $Value = null;

    /**
     * @param string $AdditionalDataKey
     * @param string $Value
     */
    public function __construct($AdditionalDataKey = null, $Value = null)
    {
        $this->AdditionalDataKey = $AdditionalDataKey;
        $this->Value = $Value;
    }
}