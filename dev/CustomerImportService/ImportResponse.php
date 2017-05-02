<?php

class ImportResponse
{
    /**
     * @var ImportResult $ImportResult
     */
    public $ImportResult = null;

    /**
     * @param ImportResult $ImportResult
     */
    public function __construct($ImportResult)
    {
        $this->ImportResult = $ImportResult;
    }
}