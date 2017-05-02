<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_AutomaticCondition
{
    /**
     * @var string $AutomaticDeliveryConditionDescription
     */
    public $AutomaticDeliveryConditionDescription = null;
    /**
     * @var guid $AutomaticDeliveryConditionId
     */
    public $AutomaticDeliveryConditionId = null;
    /**
     * @var string $DeliveryTermShow
     */
    public $DeliveryTermShow = null;
    /**
     * @var string $DispatchTypeDescription
     */
    public $DispatchTypeDescription = null;
    /**
     * @var string $DispatchTypeShow
     */
    public $DispatchTypeShow = null;
    /**
     * @var string $ExpenseName
     */
    public $ExpenseName = null;
    /**
     * @var string $ExpenseNumber
     */
    public $ExpenseNumber = null;
    /**
     * @var float $ExpensePrice
     */
    public $ExpensePrice = null;
    /**
     * @var float $SpecialPriceForPositions
     */
    public $SpecialPriceForPositions = null;

    /**
     * @param guid $AutomaticDeliveryConditionId
     */
    public function __construct($AutomaticDeliveryConditionId = null)
    {
        $this->AutomaticDeliveryConditionId = $AutomaticDeliveryConditionId;
    }
}