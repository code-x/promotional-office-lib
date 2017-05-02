<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_PurchaseOrderBettermentItem
{
    /**
     * @var string $ArticleOrderNumber
     */
    public $ArticleOrderNumber = null;

    /**
     * @param string $ArticleOrderNumber
     */
    public function __construct($ArticleOrderNumber = null)
    {
        $this->ArticleOrderNumber = $ArticleOrderNumber;
    }
}