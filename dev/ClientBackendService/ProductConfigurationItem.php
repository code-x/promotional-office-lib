<?php

class ProductConfigurationItem
{
    /**
     * @var boolean $AddAsInlineCost
     */
    public $AddAsInlineCost = null;
    /**
     * @var int $CombinationNumber
     */
    public $CombinationNumber = null;
    /**
     * @var string $CombinationType
     */
    public $CombinationType = null;
    /**
     * @var ProductConfigurationColorItem[] $LinkedColorRestrictions
     */
    public $LinkedColorRestrictions = null;
    /**
     * @var string $LinkedOwnArticleNumber
     */
    public $LinkedOwnArticleNumber = null;
    /**
     * @var guid $LinkedProductIdentifier
     */
    public $LinkedProductIdentifier = null;
    /**
     * @var string $LinkedPurchaseOrderNumber
     */
    public $LinkedPurchaseOrderNumber = null;
    /**
     * @var ProductConfigurationSizeItem[] $LinkedSizeRestrictions
     */
    public $LinkedSizeRestrictions = null;
    /**
     * @var string $MainColorKey
     */
    public $MainColorKey = null;
    /**
     * @var string $MainSizeKey
     */
    public $MainSizeKey = null;
    /**
     * @var float $QuantityDenominator
     */
    public $QuantityDenominator = null;
    /**
     * @var string $QuantityDenominatorUnit
     */
    public $QuantityDenominatorUnit = null;
    /**
     * @var float $QuantityNumerator
     */
    public $QuantityNumerator = null;
    /**
     * @var string $QuantityNumeratorUnit
     */
    public $QuantityNumeratorUnit = null;
    /**
     * @var string $QuantityType
     */
    public $QuantityType = null;
    /**
     * @var boolean $RestrictedToColorSizeCombination
     */
    public $RestrictedToColorSizeCombination = null;
    /**
     * @var int $ResultRoundDigits
     */
    public $ResultRoundDigits = null;
    /**
     * @var boolean $SetPrintPositionOnlyPriceToOnInsert
     */
    public $SetPrintPositionOnlyPriceToOnInsert = null;
    /**
     * @var boolean $SetPrintPositionToOnInsert
     */
    public $SetPrintPositionToOnInsert = null;
    /**
     * @var boolean $SetPrintPriceSummaryToOnInsert
     */
    public $SetPrintPriceSummaryToOnInsert = null;
    /**
     * @var int $SortNumber
     */
    public $SortNumber = null;
    /**
     * @var int $UseColorsFromArticleCombination
     */
    public $UseColorsFromArticleCombination = null;
    /**
     * @var int $UseSizesFromArticleCombination
     */
    public $UseSizesFromArticleCombination = null;

    /**
     * @param boolean $AddAsInlineCost
     * @param guid $LinkedProductIdentifier
     * @param float $QuantityDenominator
     * @param float $QuantityNumerator
     * @param boolean $RestrictedToColorSizeCombination
     * @param int $ResultRoundDigits
     * @param int $SortNumber
     */
    public function __construct($AddAsInlineCost, $LinkedProductIdentifier, $QuantityDenominator, $QuantityNumerator, $RestrictedToColorSizeCombination, $ResultRoundDigits, $SortNumber)
    {
        $this->AddAsInlineCost = $AddAsInlineCost;
        $this->LinkedProductIdentifier = $LinkedProductIdentifier;
        $this->QuantityDenominator = $QuantityDenominator;
        $this->QuantityNumerator = $QuantityNumerator;
        $this->RestrictedToColorSizeCombination = $RestrictedToColorSizeCombination;
        $this->ResultRoundDigits = $ResultRoundDigits;
        $this->SortNumber = $SortNumber;
    }
}