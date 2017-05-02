<?php

class ImporterDetails
{
    /**
     * @var ImportFieldInfo[] $FieldInfos
     */
    public $FieldInfos = null;
    /**
     * @var guid $ImporterId
     */
    public $ImporterId = null;

    /**
     * @param guid $ImporterId
     */
    public function __construct($ImporterId)
    {
        $this->ImporterId = $ImporterId;
    }
}