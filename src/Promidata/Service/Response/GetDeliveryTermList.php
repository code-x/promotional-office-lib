<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetDeliveryTermList
{
    /**
     * @var Promidata_Service_DTO_LocalizedItem[] $GetDeliveryTermListResult
     */
    public $GetDeliveryTermListResult = null;

    /**
     * @param Promidata_Service_DTO_LocalizedItem[] $GetDeliveryTermListResult
     */
    public function __construct($GetDeliveryTermListResult)
    {
        $this->GetDeliveryTermListResult = $GetDeliveryTermListResult;
    }
}