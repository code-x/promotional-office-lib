<?php

class GetDispatchTypeListResponse
{
    /**
     * @var LocalizedItem[] $GetDispatchTypeListResult
     */
    public $GetDispatchTypeListResult = null;

    /**
     * @param LocalizedItem[] $GetDispatchTypeListResult
     */
    public function __construct($GetDispatchTypeListResult)
    {
        $this->GetDispatchTypeListResult = $GetDispatchTypeListResult;
    }
}