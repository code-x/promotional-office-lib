<?php

class GetProductInformationByProductIdentifier
{
    /**
     * @var ProductIdentifier $productIdentifier
     */
    public $productIdentifier = null;

    /**
     * @param ProductIdentifier $productIdentifier
     */
    public function __construct($productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }
}