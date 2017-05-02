<?php

include_once('ImportFieldInfo.php');

class CompositeImportFieldInfo extends ImportFieldInfo
{
    /**
     * @var ImportFieldInfo[] $CompositeFields
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