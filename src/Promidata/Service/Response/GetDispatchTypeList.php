<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetDispatchTypeList
{
    /**
     * @var Promidata_Service_DTO_LocalizedItem[] $GetDispatchTypeListResult
     */
    public $GetDispatchTypeListResult = null;

    /**
     * @param Promidata_Service_DTO_LocalizedItem[] $GetDispatchTypeListResult
     */
    public function __construct($GetDispatchTypeListResult)
    {
        $this->GetDispatchTypeListResult = $GetDispatchTypeListResult;
    }
}