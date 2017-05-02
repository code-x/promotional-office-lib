<?php

class GetPossibleAutomaticConditionListResponse
{
    /**
     * @var GetPossibleAutomaticConditionListResult $GetPossibleAutomaticConditionListResult
     */
    public $GetPossibleAutomaticConditionListResult = null;

    /**
     * @param GetPossibleAutomaticConditionListResult $GetPossibleAutomaticConditionListResult
     */
    public function __construct($GetPossibleAutomaticConditionListResult)
    {
        $this->GetPossibleAutomaticConditionListResult = $GetPossibleAutomaticConditionListResult;
    }
}