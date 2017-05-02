<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetOptionList
{
    /**
     * @var OptionItem[] $GetOptionListResult
     */
    public $GetOptionListResult = null;

    /**
     * @param OptionItem[] $GetOptionListResult
     */
    public function __construct($GetOptionListResult)
    {
        $this->GetOptionListResult = $GetOptionListResult;
    }
}