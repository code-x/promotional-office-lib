<?php

class ImportFieldInfo
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