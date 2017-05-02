<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ImportFieldInfo
{
    /**
     * @var string $Description
     */
    public $Description = null;
    /**
     * @var string $FieldName
     */
    public $FieldName = null;
    /**
     * @var boolean $IsRequired
     */
    public $IsRequired = null;

    /**
     * @param boolean $IsRequired
     */
    public function __construct($IsRequired)
    {
        $this->IsRequired = $IsRequired;
    }
}