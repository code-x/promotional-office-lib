<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetCustomerPriceList
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $identifier
     */
    public $identifier = null;

    /**
     * @param Promidata_Service_DTO_CustomerIdentifier $identifier
     */
    public function __construct(Promidata_Service_DTO_CustomerIdentifier $identifier)
    {
        $this->identifier = $identifier;
    }
}