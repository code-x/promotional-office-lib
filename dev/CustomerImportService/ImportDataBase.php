<?php

class ImportDataBase
{
    /**
     * @var guid $ImporterIdentifier
     */
    public $ImporterIdentifier = null;
    /**
     * @var guid $DatabaseIdentifier
     */
    public $DatabaseIdentifier = null;

    /**
     * @param guid $ImporterIdentifier
     * @param guid $DatabaseIdentifier
     */
    public function __construct($ImporterIdentifier, $DatabaseIdentifier)
    {
        $this->ImporterIdentifier = $ImporterIdentifier;
        $this->DatabaseIdentifier = $DatabaseIdentifier;
    }
}