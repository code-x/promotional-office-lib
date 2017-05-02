<?php

class ExistsResponse
{
    /**
     * @var ExistsResult $ExistsResult
     */
    public $ExistsResult = null;

    /**
     * @param ExistsResult $ExistsResult
     */
    public function __construct($ExistsResult)
    {
        $this->ExistsResult = $ExistsResult;
    }
}