<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ColorSizeCombination
{
    /**
     * @var Promidata_Service_DTO_ProductPriceInformation[] $BuyingRelays
     */
    public $BuyingRelays = null;
    /**
     * @var Promidata_Service_DTO_TranslationItem[] $ColorNames
     */
    public $ColorNames = null;
    /**
     * @var float $CurrentStockPrice
     */
    public $CurrentStockPrice = null;
    /**
     * @var float $DefaultPurchasingCosts
     */
    public $DefaultPurchasingCosts = null;
    /**
     * @var string $EanCode
     */
    public $EanCode = null;
    /**
     * @var string $FreeText1
     */
    public $FreeText1 = null;
    /**
     * @var string $FreeText2
     */
    public $FreeText2 = null;
    /**
     * @var string $FreeText3
     */
    public $FreeText3 = null;
    /**
     * @var Promidata_Service_DTO_LinkItemV1[] $LinkList
     */
    public $LinkList = null;
    /**
     * @var string $Notice
     */
    public $Notice = null;
    /**
     * @var string $OrderNumberAddition
     */
    public $OrderNumberAddition = null;
    /**
     * @var string $OwnArticleNumberAddition
     */
    public $OwnArticleNumberAddition = null;
    /**
     * @var Promidata_Service_DTO_ProductPriceInformation[] $SellingRelays
     */
    public $SellingRelays = null;
    /**
     * @var Promidata_Service_DTO_TranslationItem[] $SizeNames
     */
    public $SizeNames = null;

    /**
     * @param float $CurrentStockPrice
     */
    public function __construct($CurrentStockPrice)
    {
        $this->CurrentStockPrice = $CurrentStockPrice;
    }
}