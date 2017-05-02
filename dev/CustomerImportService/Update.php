<?php

class Update
{
    /**
     * @var DataSelector $dataSelector
     */
    public $dataSelector = null;
    /**
     * @var ImportData $importData
     */
    public $importData = null;

    /**
     * @param DataSelector $dataSelector
     * @param ImportData $importData
     */
    public function __construct($dataSelector, $importData)
    {
        $this->dataSelector = $dataSelector;
        $this->importData = $importData;
    }
}