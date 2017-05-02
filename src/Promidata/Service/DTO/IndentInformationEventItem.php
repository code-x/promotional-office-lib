<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_IndentInformationEventItem
{
    /**
     * @var string $AssigneeAssignType
     */
    public $AssigneeAssignType = null;
    /**
     * @var string $AssigneeUserNameFull
     */
    public $AssigneeUserNameFull = null;
    /**
     * @var dateTime $DateOfCompletition
     */
    public $DateOfCompletition = null;
    /**
     * @var int $EventDateDays
     */
    public $EventDateDays = null;
    /**
     * @var string $EventDateType
     */
    public $EventDateType = null;
    /**
     * @var int $IndentProbability
     */
    public $IndentProbability = null;
    /**
     * @var boolean $IsComplete
     */
    public $IsComplete = null;
    /**
     * @var boolean $IsCurrentEvent
     */
    public $IsCurrentEvent = null;
    /**
     * @var boolean $IsMailEvent
     */
    public $IsMailEvent = null;
    /**
     * @var string $Name
     */
    public $Name = null;
    /**
     * @var string $Notice
     */
    public $Notice = null;
    /**
     * @var dateTime $ShouldBeCompletedDate
     */
    public $ShouldBeCompletedDate = null;
    /**
     * @var int $SortNumber
     */
    public $SortNumber = null;

    /**
     * @param int $EventDateDays
     * @param boolean $IsComplete
     * @param boolean $IsCurrentEvent
     * @param boolean $IsMailEvent
     * @param int $SortNumber
     */
    public function __construct($EventDateDays, $IsComplete, $IsCurrentEvent, $IsMailEvent, $SortNumber)
    {
        $this->EventDateDays = $EventDateDays;
        $this->IsComplete = $IsComplete;
        $this->IsCurrentEvent = $IsCurrentEvent;
        $this->IsMailEvent = $IsMailEvent;
        $this->SortNumber = $SortNumber;
    }
}