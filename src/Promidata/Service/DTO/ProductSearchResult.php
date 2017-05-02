<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ProductSearchResult
{
    /**
     * @var string $ArticleNumber
     */
    public $ArticleNumber = null;
    /**
     * @var Promidata_Service_Enum_ArticleType $ArticleType
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
     * @param Promidata_Service_Enum_ArticleType $ArticleType
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