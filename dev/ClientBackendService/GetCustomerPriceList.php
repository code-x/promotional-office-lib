<?php

class GetCustomerPriceList
{
    /**
     * @var CustomerIdentifier $identifier
     */
    public $identifier = null;

    /**
     * @param CustomerIdentifier $identifier
     */
    public function __construct($identifier)
    {
        $this->identifier = $identifier;
    }
}