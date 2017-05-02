<?php

class SearchSupplier
{
    /**
     * @var SupplierSearchParameter[] $importdata
     */
    public $importdata = null;

    /**
     * @param SupplierSearchParameter[] $importdata
     */
    public function __construct($importdata)
    {
        $this->importdata = $importdata;
    }
}