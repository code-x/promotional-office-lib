<?php

class SearchCustomer
{
    /**
     * @var CustomerSearchParameter[] $importdata
     */
    public $importdata = null;

    /**
     * @param CustomerSearchParameter[] $importdata
     */
    public function __construct($importdata)
    {
        $this->importdata = $importdata;
    }
}