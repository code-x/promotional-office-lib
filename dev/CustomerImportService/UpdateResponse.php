<?php

class UpdateResponse
{
    /**
     * @var ImportResult $UpdateResult
     */
    public $UpdateResult = null;

    /**
     * @param ImportResult $UpdateResult
     */
    public function __construct($UpdateResult)
    {
        $this->UpdateResult = $UpdateResult;
    }
}