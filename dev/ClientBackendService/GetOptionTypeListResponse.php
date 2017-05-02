<?php

class GetOptionTypeListResponse
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