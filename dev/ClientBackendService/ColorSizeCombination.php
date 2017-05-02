<?php

class ColorSizeCombination
{
    /**
     * @var ArticleDynamicDataItem[] $ArticleDynamicDatas
     */
    public $ArticleDynamicDatas = null;
    /**
     * @var ArticleDynamicLanguageDataItem[] $ArticleDynamicLanguageDatas
     */
    public $ArticleDynamicLanguageDatas = null;
    /**
     * @var ProductPriceInformation[] $BuyingRelays
     */
    public $BuyingRelays = null;
    /**
     * @var TranslationItem[] $ColorNames
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
     * @var ImportInformation[] $ImportInformations
     */
    public $ImportInformations = null;
    /**
     * @var boolean $IsActive
     */
    public $IsActive = null;
    /**
     * @var LinkItemV1[] $LinkList
     */
    public $LinkList = null;
    /**
     * @var string $Notice
     */
    public $Notice = null;
    /**
     * @var string $Option1Key
     */
    public $Option1Key = null;
    /**
     * @var TranslationItem[] $Option1Names
     */
    public $Option1Names = null;
    /**
     * @var string $Option2Key
     */
    public $Option2Key = null;
    /**
     * @var TranslationItem[] $Option2Names
     */
    public $Option2Names = null;
    /**
     * @var string $OrderNumberAddition
     */
    public $OrderNumberAddition = null;
    /**
     * @var string $OwnArticleNumberAddition
     */
    public $OwnArticleNumberAddition = null;
    /**
     * @var ProductPriceInformation[] $SellingRelays
     */
    public $SellingRelays = null;
    /**
     * @var TranslationItem[] $SizeNames
     */
    public $SizeNames = null;
    /**
     * @var boolean $UseOnlyOrderNumberAddition
     */
    public $UseOnlyOrderNumberAddition = null;
    /**
     * @var boolean $UseOnlyOwnArticleNumberAddition
     */
    public $UseOnlyOwnArticleNumberAddition = null;
    /**
     * @var guid $VariationIdentifier
     */
    public $VariationIdentifier = null;

    /**
     * @param float $CurrentStockPrice
     * @param boolean $IsActive
     * @param boolean $UseOnlyOrderNumberAddition
     * @param boolean $UseOnlyOwnArticleNumberAddition
     * @param guid $VariationIdentifier
     */
    public function __construct($CurrentStockPrice, $IsActive, $UseOnlyOrderNumberAddition, $UseOnlyOwnArticleNumberAddition, $VariationIdentifier)
    {
        $this->CurrentStockPrice = $CurrentStockPrice;
        $this->IsActive = $IsActive;
        $this->UseOnlyOrderNumberAddition = $UseOnlyOrderNumberAddition;
        $this->UseOnlyOwnArticleNumberAddition = $UseOnlyOwnArticleNumberAddition;
        $this->VariationIdentifier = $VariationIdentifier;
    }
}