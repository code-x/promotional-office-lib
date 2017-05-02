<?php

class GetIndentInformationResponse
{
    /**
     * @var IndentInformationItem $GetIndentInformationResult
     */
    public $GetIndentInformationResult = null;

    /**
     * @param IndentInformationItem $GetIndentInformationResult
     */
    public function __construct($GetIndentInformationResult)
    {
        $this->GetIndentInformationResult = $GetIndentInformationResult;
    }
}