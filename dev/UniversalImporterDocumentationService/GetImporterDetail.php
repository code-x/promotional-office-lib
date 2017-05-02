<?php

class GetImporterDetail
{
    /**
     * @var guid $importerId
     */
    public $importerId = null;

    /**
     * @param guid $importerId
     */
    public function __construct($importerId)
    {
        $this->importerId = $importerId;
    }
}