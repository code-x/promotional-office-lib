<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_CompositeImportFieldInfo extends Promidata_Service_DTO_ImportFieldInfo
{
    /**
     * @var Promidata_Service_DTO_ImportFieldInfo[] $CompositeFields
     */
    public $CompositeFields = null;

    /**
     * @param boolean $IsRequired
     */
    public function __construct($IsRequired)
    {
        parent::__construct($IsRequired);
    }
}