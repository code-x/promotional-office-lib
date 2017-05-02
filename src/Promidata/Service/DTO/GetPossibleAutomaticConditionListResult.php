<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_GetPossibleAutomaticConditionListResult
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
     * @var Promidata_Service_DTO_AutomaticCondition[] $AutomaticConditionList
     */
    public $AutomaticConditionList = null;
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
    public function __construct(
        $CalculatedNumberOfPackages,
        $CalculatedTotalVolume,
        $CalculatedTotalWeight,
        $SaleTaxIsCalculated
    ) {
        $this->CalculatedNumberOfPackages = $CalculatedNumberOfPackages;
        $this->CalculatedTotalVolume = $CalculatedTotalVolume;
        $this->CalculatedTotalWeight = $CalculatedTotalWeight;
        $this->SaleTaxIsCalculated = $SaleTaxIsCalculated;
    }
}