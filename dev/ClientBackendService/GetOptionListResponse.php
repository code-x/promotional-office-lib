<?php

class GetOptionListResponse
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