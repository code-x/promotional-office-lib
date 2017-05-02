<?php

class GetDeliveryTermListResponse
{
    /**
     * @var LocalizedItem[] $GetDeliveryTermListResult
     */
    public $GetDeliveryTermListResult = null;

    /**
     * @param LocalizedItem[] $GetDeliveryTermListResult
     */
    public function __construct($GetDeliveryTermListResult)
    {
        $this->GetDeliveryTermListResult = $GetDeliveryTermListResult;
    }
}