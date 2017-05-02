<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetIndentInformation
{
    /**
     * @var Promidata_Service_DTO_IndentInformationItem $GetIndentInformationResult
     */
    public $GetIndentInformationResult = null;

    /**
     * @param Promidata_Service_DTO_IndentInformationItem $GetIndentInformationResult
     */
    public function __construct($GetIndentInformationResult)
    {
        $this->GetIndentInformationResult = $GetIndentInformationResult;
    }
}