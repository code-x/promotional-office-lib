<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_TenderIndentImporterPositionData
{
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterBettermentData[] $BettermentList
     */
    public $BettermentList = null;
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
     * @var dateTime $EarliestDeliveryDate
     */
    public $EarliestDeliveryDate = null;
    /**
     * @var boolean $IsStockArticle
     */
    public $IsStockArticle = null;
    /**
     * @var dateTime $LatestDeliveryDate
     */
    public $LatestDeliveryDate = null;
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
     * @var float $Quantity
     */
    public $Quantity = null;
    /**
     * @var string $QuantityUnit
     */
    public $QuantityUnit = null;
    /**
     * @var float $SellingPricePerUnit
     */
    public $SellingPricePerUnit = null;
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterRelayData[] $SellingRelayList
     */
    public $SellingRelayList = null;
    /**
     * @var string $SupplierName
     */
    public $SupplierName = null;

    /**
     * @param float $Quantity
     */
    public function __construct($Quantity)
    {
        $this->Quantity = $Quantity;
    }
}