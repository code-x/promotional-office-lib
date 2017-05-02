<?php

class GetPossibleAutomaticConditionList
{
    /**
     * @var TenderIndentImporterData $importdata
     */
    public $importdata = null;
    /**
     * @var string[] $possibleDispatchTypes
     */
    public $possibleDispatchTypes = null;

    /**
     * @param TenderIndentImporterData $importdata
     * @param string[] $possibleDispatchTypes
     */
    public function __construct($importdata, $possibleDispatchTypes)
    {
        $this->importdata = $importdata;
        $this->possibleDispatchTypes = $possibleDispatchTypes;
    }
}