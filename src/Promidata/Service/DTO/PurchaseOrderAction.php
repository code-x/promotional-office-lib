<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_PurchaseOrderAction
{
    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @param string $Name
     */
    public function __construct($Name = null)
    {
        $this->Name = $Name;
    }
}