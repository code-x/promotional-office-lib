<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ProductConfigurationItem
{
    /**
     * @var int $CombinationNumber
     */
    public $CombinationNumber = null;
    /**
     * @var string $CombinationType
     */
    public $CombinationType = null;
    /**
     * @var string $LinkedOwnArticleNumber
     */
    public $LinkedOwnArticleNumber = null;
    /**
     * @var string $LinkedPurchaseOrderNumber
     */
    public $LinkedPurchaseOrderNumber = null;
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
     * @param float $QuantityDenominator
     * @param float $QuantityNumerator
     * @param boolean $RestrictedToColorSizeCombination
     * @param int $ResultRoundDigits
     * @param int $SortNumber
     */
    public function __construct($QuantityDenominator, $QuantityNumerator, $RestrictedToColorSizeCombination, $ResultRoundDigits, $SortNumber)
    {
        $this->QuantityDenominator = $QuantityDenominator;
        $this->QuantityNumerator = $QuantityNumerator;
        $this->RestrictedToColorSizeCombination = $RestrictedToColorSizeCombination;
        $this->ResultRoundDigits = $ResultRoundDigits;
        $this->SortNumber = $SortNumber;
    }
}