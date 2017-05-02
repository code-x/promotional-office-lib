<?php

class GetCustomerInformationList
{
    /**
     * @var dateTime $startDate
     */
    public $startDate = null;

    /**
     * @param dateTime $startDate
     */
    public function __construct($startDate)
    {
        $this->startDate = $startDate;
    }
}