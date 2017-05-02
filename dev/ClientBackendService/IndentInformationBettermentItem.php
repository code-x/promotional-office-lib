<?php

class IndentInformationBettermentItem
{
    /**
     * @var string $ArticleDescription
     */
    public $ArticleDescription = null;
    /**
     * @var string $ArticleName
     */
    public $ArticleName = null;
    /**
     * @var string $ArticleOrderNumber
     */
    public $ArticleOrderNumber = null;
    /**
     * @var string $BettermentDeliveredStateName
     */
    public $BettermentDeliveredStateName = null;
    /**
     * @var string $BettermentOrderStateName
     */
    public $BettermentOrderStateName = null;
    /**
     * @var string $BettermentReceivedStateName
     */
    public $BettermentReceivedStateName = null;
    /**
     * @var string $ColorName
     */
    public $ColorName = null;
    /**
     * @var boolean $DirectDispatch
     */
    public $DirectDispatch = null;
    /**
     * @var string $IndentConfirmationText
     */
    public $IndentConfirmationText = null;
    /**
     * @var string $Option1IdName
     */
    public $Option1IdName = null;
    /**
     * @var string $Option2IdName
     */
    public $Option2IdName = null;
    /**
     * @var string $OwnArticleNumber
     */
    public $OwnArticleNumber = null;
    /**
     * @var float $QuantityAmount
     */
    public $QuantityAmount = null;
    /**
     * @var string $QuantityUnit
     */
    public $QuantityUnit = null;
    /**
     * @var string $SizeName
     */
    public $SizeName = null;
    /**
     * @var string $SupplierName
     */
    public $SupplierName = null;
    /**
     * @var string $SupplierNameAffex
     */
    public $SupplierNameAffex = null;

    /**
     * @param boolean $DirectDispatch
     * @param float $QuantityAmount
     */
    public function __construct($DirectDispatch, $QuantityAmount)
    {
        $this->DirectDispatch = $DirectDispatch;
        $this->QuantityAmount = $QuantityAmount;
    }
}