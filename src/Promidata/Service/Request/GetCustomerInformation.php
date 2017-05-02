<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetCustomerInformation
{
    /**
     * @var Promidata_Service_DTO_CustomerIdentifier $identifierV1
     */
    public $identifierV1 = null;

    /**
     * @param Promidata_Service_DTO_CustomerIdentifier $identifierV1
     */
    public function __construct(Promidata_Service_DTO_CustomerIdentifier $identifierV1)
    {
        $this->identifierV1 = $identifierV1;
    }
}