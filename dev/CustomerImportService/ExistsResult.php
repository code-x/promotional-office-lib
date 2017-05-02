<?php

include_once('ImportDataBase.php');

class ExistsResult extends ImportDataBase
{
    /**
     * @var string $ExternId
     */
    public $ExternId = null;
    /**
     * @var boolean $Exists
     */
    public $Exists = null;

    /**
     * @param guid $ImporterIdentifier
     * @param guid $DatabaseIdentifier
     * @param boolean $Exists
     */
    public function __construct($ImporterIdentifier, $DatabaseIdentifier, $Exists)
    {
        parent::__construct($ImporterIdentifier, $DatabaseIdentifier);
        $this->Exists = $Exists;
    }
}