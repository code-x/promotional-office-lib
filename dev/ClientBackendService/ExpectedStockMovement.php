<?php

class ExpectedStockMovement
{
    /**
     * @var boolean $MayBePrefered
     */
    public $MayBePrefered = null;
    /**
     * @var dateTime $MovementDate
     */
    public $MovementDate = null;
    /**
     * @var string $ProductNumber
     */
    public $ProductNumber = null;
    /**
     * @var float $Quantity
     */
    public $Quantity = null;
    /**
     * @var string $QuantityUnit
     */
    public $QuantityUnit = null;

    /**
     * @param boolean $MayBePrefered
     * @param dateTime $MovementDate
     * @param float $Quantity
     */
    public function __construct($MayBePrefered, $MovementDate, $Quantity)
    {
        $this->MayBePrefered = $MayBePrefered;
        $this->MovementDate = $MovementDate;
        $this->Quantity = $Quantity;
    }
}