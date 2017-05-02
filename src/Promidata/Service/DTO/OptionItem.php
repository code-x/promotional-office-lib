<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_OptionItem
{
    /**
     * @var boolean $Disabled
     */
    public $Disabled = null;
    /**
     * @var boolean $IsSystemType
     */
    public $IsSystemType = null;
    /**
     * @var string $Key
     */
    public $Key = null;
    /**
     * @var string $OptionTypeKey
     */
    public $OptionTypeKey = null;
    /**
     * @var TranslationItem[] $Translations
     */
    public $Translations = null;

    /**
     * @param boolean $Disabled
     * @param boolean $IsSystemType
     */
    public function __construct($Disabled, $IsSystemType)
    {
        $this->Disabled = $Disabled;
        $this->IsSystemType = $IsSystemType;
    }
}