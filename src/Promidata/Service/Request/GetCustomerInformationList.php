<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetCustomerInformationList
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