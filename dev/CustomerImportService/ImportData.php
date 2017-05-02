<?php

include_once('ImportDataBase.php');

class ImportData extends ImportDataBase
{
    /**
     * @var ImportFieldDataCollection $ImportFields
     */
    public $ImportFields = null;
    /**
     * @var AdditionalDataCollection $AdditionalData
     */
    public $AdditionalData = null;

    /**
     * @param guid $ImporterIdentifier
     * @param guid $DatabaseIdentifier
     */
    public function __construct($ImporterIdentifier, $DatabaseIdentifier)
    {
        parent::__construct($ImporterIdentifier, $DatabaseIdentifier);
    }
}