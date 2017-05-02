<?php

class ProductConfiguration
{
    /**
     * @var string $MainOwnArticleNumber
     */
    public $MainOwnArticleNumber = null;
    /**
     * @var guid $MainProductIdentifier
     */
    public $MainProductIdentifier = null;
    /**
     * @var string $MainPurchaseOrderNumber
     */
    public $MainPurchaseOrderNumber = null;
    /**
     * @var ProductConfigurationItem[] $ProductConfigurationItems
     */
    public $ProductConfigurationItems = null;

    /**
     * @param guid $MainProductIdentifier
     */
    public function __construct($MainProductIdentifier)
    {
        $this->MainProductIdentifier = $MainProductIdentifier;
    }
}