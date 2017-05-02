<?php

class ExceptionCustom
{
    /**
     * @var string $any
     */
    public $any = null;
    /**
     * @var QName $FactoryType
     */
    public $FactoryType = null;

    /**
     * @param string $any
     * @param QName $FactoryType
     */
    public function __construct($any, $FactoryType)
    {
        $this->any = $any;
        $this->FactoryType = $FactoryType;
    }
}