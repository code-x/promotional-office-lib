<?php

class Import
{
    /**
     * @var ImportData $importData
     */
    public $importData = null;

    /**
     * @param ImportData $importData
     */
    public function __construct($importData)
    {
        $this->importData = $importData;
    }
}