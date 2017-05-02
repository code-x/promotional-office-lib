<?php

class ProductSearchResult
{
    /**
     * @var string $ArticleNumber
     */
    public $ArticleNumber = null;
    /**
     * @var ArticleTypeEnum $ArticleType
     */
    public $ArticleType = null;
    /**
     * @var boolean $IsActive
     */
    public $IsActive = null;
    /**
     * @var string $OrderNumber
     */
    public $OrderNumber = null;
    /**
     * @var guid $ProductIdentifier
     */
    public $ProductIdentifier = null;
    /**
     * @var string $ProductName
     */
    public $ProductName = null;
    /**
     * @var string $SupplierName
     */
    public $SupplierName = null;

    /**
     * @param ArticleTypeEnum $ArticleType
     * @param boolean $IsActive
     * @param guid $ProductIdentifier
     */
    public function __construct($ArticleType, $IsActive, $ProductIdentifier)
    {
        $this->ArticleType = $ArticleType;
        $this->IsActive = $IsActive;
        $this->ProductIdentifier = $ProductIdentifier;
    }
}