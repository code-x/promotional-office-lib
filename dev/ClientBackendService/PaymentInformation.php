<?php

class PaymentInformation
{
    /**
     * @var int $Days
     */
    public $Days = null;
    /**
     * @var float $Deposit
     */
    public $Deposit = null;
    /**
     * @var string $Description
     */
    public $Description = null;
    /**
     * @var string $Show
     */
    public $Show = null;
    /**
     * @var int $Skonto
     */
    public $Skonto = null;
    /**
     * @var LocalizationItem[] $Texts
     */
    public $Texts = null;

    /**
     * @param int $Days
     * @param float $Deposit
     * @param int $Skonto
     */
    public function __construct($Days, $Deposit, $Skonto)
    {
        $this->Days = $Days;
        $this->Deposit = $Deposit;
        $this->Skonto = $Skonto;
    }
}