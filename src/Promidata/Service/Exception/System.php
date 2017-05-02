<?php

/**
 * System Exception for Promidata PromotionalOffice Service.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Exception_System extends Promidata_Service_Exception_Custom
{
    /**
     * @param string $any
     * @param QName $FactoryType
     */
    public function __construct($any, $FactoryType)
    {
        parent::__construct($any, $FactoryType);
    }
}