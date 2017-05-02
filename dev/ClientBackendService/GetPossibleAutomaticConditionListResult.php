<?php

class GetPossibleAutomaticConditionListResult
{
    /**
     * @var int $CalculatedNumberOfPackages
     */
    public $CalculatedNumberOfPackages = null;
    /**
     * @var int $CalculatedTotalVolume
     */
    public $CalculatedTotalVolume = null;
    /**
     * @var int $CalculatedTotalWeight
     */
    public $CalculatedTotalWeight = null;
    /**
     * @var AutomaticCondition[] $PossibleAutomaticConditionList
     */
    public $PossibleAutomaticConditionList = null;
    /**
     * @var boolean $SaleTaxIsCalculated
     */
    public $SaleTaxIsCalculated = null;

    /**
     * @param int $CalculatedNumberOfPackages
     * @param int $CalculatedTotalVolume
     * @param int $CalculatedTotalWeight
     * @param boolean $SaleTaxIsCalculated
     */
    public function __construct($CalculatedNumberOfPackages, $CalculatedTotalVolume, $CalculatedTotalWeight, $SaleTaxIsCalculated)
    {
        $this->CalculatedNumberOfPackages = $CalculatedNumberOfPackages;
        $this->CalculatedTotalVolume = $CalculatedTotalVolume;
        $this->CalculatedTotalWeight = $CalculatedTotalWeight;
        $this->SaleTaxIsCalculated = $SaleTaxIsCalculated;
    }
}