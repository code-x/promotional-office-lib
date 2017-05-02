<?php

class OptionTypeItem
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