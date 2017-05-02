<?php

/**
 * Custom Exception for Promidata PromotionalOffice Service.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Exception_Custom
{
    /**
     * @var string $any
     */
    public $any = null;
    /**
     * @var QName $FactoryType
     */
    public $FactoryType = null;

    /**
     * @param string $any
     * @param QName $FactoryType
     */
    public function __construct($any, $FactoryType)
    {
        $this->any = $any;
        $this->FactoryType = $FactoryType;
    }
}