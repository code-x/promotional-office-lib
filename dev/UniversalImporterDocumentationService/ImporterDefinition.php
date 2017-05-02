<?php

class ImporterDefinition
{
    /**
     * @var guid $ImporterId
     */
    public $ImporterId = null;
    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @param guid $ImporterId
     */
    public function __construct($ImporterId)
    {
        $this->ImporterId = $ImporterId;
    }
}