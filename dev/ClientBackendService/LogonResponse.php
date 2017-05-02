<?php

class LogonResponse
{
    /**
     * @var string $LogonResult
     */
    public $LogonResult = null;

    /**
     * @param string $LogonResult
     */
    public function __construct($LogonResult)
    {
        $this->LogonResult = $LogonResult;
    }
}