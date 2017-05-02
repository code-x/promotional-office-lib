<?php

include_once('ImportDataBase.php');

class ExistsArgument extends ImportDataBase
{
    /**
     * @var DataSelector $Selector
     */
    public $Selector = null;

    /**
     * @param guid $ImporterIdentifier
     * @param guid $DatabaseIdentifier
     */
    public function __construct($ImporterIdentifier, $DatabaseIdentifier)
    {
        parent::__construct($ImporterIdentifier, $DatabaseIdentifier);
    }
}