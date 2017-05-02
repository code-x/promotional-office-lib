<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ContactDetail
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $IdentifierV1
     */
    public $IdentifierV1 = null;
    /**
     * @var boolean $IsMain
     */
    public $IsMain = null;
    /**
     * @var string $Type
     */
    public $Type = null;
    /**
     * @var string $Value
     */
    public $Value = null;

    /**
     * @param boolean $IsMain
     */
    public function __construct($IsMain)
    {
        $this->IsMain = $IsMain;
    }
}