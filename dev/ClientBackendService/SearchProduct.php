<?php

class SearchProduct
{
    /**
     * @var ProductSearchParameter[] $importdata
     */
    public $importdata = null;

    /**
     * @param ProductSearchParameter[] $importdata
     */
    public function __construct($importdata)
    {
        $this->importdata = $importdata;
    }
}