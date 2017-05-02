<?php

class GetCustomerInformation
{
    /**
     * @var CustomerIdentifier $identifierV1
     */
    public $identifierV1 = null;

    /**
     * @param CustomerIdentifier $identifierV1
     */
    public function __construct($identifierV1)
    {
        $this->identifierV1 = $identifierV1;
    }
}