<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetOptionTypeList
{
    /**
     * @var OptionTypeItem[] $GetOptionTypeListResult
     */
    public $GetOptionTypeListResult = null;

    /**
     * @param OptionTypeItem[] $GetOptionTypeListResult
     */
    public function __construct($GetOptionTypeListResult)
    {
        $this->GetOptionTypeListResult = $GetOptionTypeListResult;
    }
}