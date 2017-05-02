<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_TenderIndentImporterBettermentData
{
    /**
     * @var float $BuyingPricePerUnit
     */
    public $BuyingPricePerUnit = null;
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterRelayData[] $BuyingRelayList
     */
    public $BuyingRelayList = null;
    /**
     * @var string $CustomerArticleDeliverynoteText
     */
    public $CustomerArticleDeliverynoteText = null;
    /**
     * @var string $CustomerArticleDescription
     */
    public $CustomerArticleDescription = null;
    /**
     * @var string $CustomerArticleIndentText
     */
    public $CustomerArticleIndentText = null;
    /**
     * @var string $CustomerArticleName
     */
    public $CustomerArticleName = null;
    /**
     * @var string $CustomerArticleTenderText
     */
    public $CustomerArticleTenderText = null;
    /**
     * @var string $CustomerArticleTextIntern
     */
    public $CustomerArticleTextIntern = null;
    /**
     * @var boolean $DirectDispatch
     */
    public $DirectDispatch = null;
    /**
     * @var float $Discount
     */
    public $Discount = null;
    /**
     * @var string $MyArticleNumber
     */
    public $MyArticleNumber = null;
    /**
     * @var boolean $PrintPosition
     */
    public $PrintPosition = null;
    /**
     * @var boolean $PrintPricePerUnit
     */
    public $PrintPricePerUnit = null;
    /**
     * @var float $SellingPricePerUnit
     */
    public $SellingPricePerUnit = null;
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterRelayData[] $SellingRelayList
     */
    public $SellingRelayList = null;
    /**
     * @var float $SetupCostBuyingPrice
     */
    public $SetupCostBuyingPrice = null;
    /**
     * @var string $SetupCostDescription
     */
    public $SetupCostDescription = null;
    /**
     * @var float $SetupCostSellingPrice
     */
    public $SetupCostSellingPrice = null;
    /**
     * @var string $SupplierName
     */
    public $SupplierName = null;

    public function __construct()
    {
    }
}