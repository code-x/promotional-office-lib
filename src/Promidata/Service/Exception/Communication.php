<?php

/**
 * Communication Exception for Promidata PromotionalOffice Service.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Exception_Communication extends Promidata_Service_Exception_System
{
    public function __construct($any = null, $FactoryType = null)
    {
        parent::__construct($any, $FactoryType);
    }
}
