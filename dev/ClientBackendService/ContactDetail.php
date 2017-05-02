<?php

class ContactDetail
{
    /**
     * @var CustomerIdentifier $IdentifierV1
     */
    public $IdentifierV1 = null;
    /**
     * @var boolean $IsMain
     */
    public $IsMain = null;
    /**
     * @var string $Type
     */
    public $Type = null;
    /**
     * @var string $Value
     */
    public $Value = null;

    /**
     * @param boolean $IsMain
     */
    public function __construct($IsMain)
    {
        $this->IsMain = $IsMain;
    }
}