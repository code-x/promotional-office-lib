<?php

include_once('Exception.php');

class SystemException extends ExceptionCustom
{
    /**
     * @param string $any
     * @param QName $FactoryType
     */
    public function __construct($any, $FactoryType)
    {
        parent::__construct($any, $FactoryType);
    }
}