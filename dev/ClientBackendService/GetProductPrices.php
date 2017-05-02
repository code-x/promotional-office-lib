<?php

class GetProductPrices
{
    /**
     * @var CustomerIdentifier $customerIdentifier
     */
    public $customerIdentifier = null;
    /**
     * @var ProductIdentifier $productIdentifier
     */
    public $productIdentifier = null;

    /**
     * @param CustomerIdentifier $customerIdentifier
     * @param ProductIdentifier $productIdentifier
     */
    public function __construct($customerIdentifier, $productIdentifier)
    {
        $this->customerIdentifier = $customerIdentifier;
        $this->productIdentifier = $productIdentifier;
    }
}