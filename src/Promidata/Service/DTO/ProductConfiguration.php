<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ProductConfiguration
{
    /**
     * @var string $MainOwnArticleNumber
     */
    public $MainOwnArticleNumber = null;
    /**
     * @var string $MainPurchaseOrderNumber
     */
    public $MainPurchaseOrderNumber = null;
    /**
     * @var Promidata_Service_DTO_ProductConfigurationItem[] $ProductConfigurationItems
     */
    public $ProductConfigurationItems = null;

    public function __construct()
    {
    }
}