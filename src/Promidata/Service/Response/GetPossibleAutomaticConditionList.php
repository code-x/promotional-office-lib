<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetPossibleAutomaticConditionList
{
    /**
     * @var Promidata_Service_DTO_GetPossibleAutomaticConditionListResult $GetPossibleAutomaticConditionListResult
     */
    public $GetPossibleAutomaticConditionListResult = null;

    /**
     * @param Promidata_Service_DTO_GetPossibleAutomaticConditionListResult $GetPossibleAutomaticConditionListResult
     */
    public function __construct($GetPossibleAutomaticConditionListResult)
    {
        $this->GetPossibleAutomaticConditionListResult = $GetPossibleAutomaticConditionListResult;
    }
}