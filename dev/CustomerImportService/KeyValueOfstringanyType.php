<?php

class KeyValueOfstringanyType
{
    /**
     * @var string $Key
     */
    public $Key = null;
    /**
     * @var anyType $Value
     */
    public $Value = null;

    /**
     * @param string $Key
     * @param anyType $Value
     */
    public function __construct($Key, $Value)
    {
        $this->Key = $Key;
        $this->Value = $Value;
    }
}