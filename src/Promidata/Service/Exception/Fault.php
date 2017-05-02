<?php

/**
 * Fault Exception for Promidata PromotionalOffice Service.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Exception_Fault extends Promidata_Service_Exception_Communication
{
    public function __construct()
    {
        parent::__construct();
    }
}