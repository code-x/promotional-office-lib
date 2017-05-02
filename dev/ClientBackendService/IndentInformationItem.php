<?php

class IndentInformationItem
{
    /**
     * @var string $AdministrativUserFullName
     */
    public $AdministrativUserFullName = null;
    /**
     * @var string $AgentFullName
     */
    public $AgentFullName = null;
    /**
     * @var string $BankAccountBIC
     */
    public $BankAccountBIC = null;
    /**
     * @var string $BankAccountIBAN
     */
    public $BankAccountIBAN = null;
    /**
     * @var string $BankAccountOwner
     */
    public $BankAccountOwner = null;
    /**
     * @var float $BuyingPrice
     */
    public $BuyingPrice = null;
    /**
     * @var float $CalculatedSellingPrice
     */
    public $CalculatedSellingPrice = null;
    /**
     * @var string $ColliOfLastDeliverNoteToCustomer
     */
    public $ColliOfLastDeliverNoteToCustomer = null;
    /**
     * @var string $CreatorFullName
     */
    public $CreatorFullName = null;
    /**
     * @var string $CustomerText
     */
    public $CustomerText = null;
    /**
     * @var dateTime $DateInsert
     */
    public $DateInsert = null;
    /**
     * @var dateTime $DateOfLastDeliverNoteToCustomer
     */
    public $DateOfLastDeliverNoteToCustomer = null;
    /**
     * @var boolean $DepositBlocked
     */
    public $DepositBlocked = null;
    /**
     * @var boolean $DepositManualUnblocked
     */
    public $DepositManualUnblocked = null;
    /**
     * @var string $DispatchType
     */
    public $DispatchType = null;
    /**
     * @var string $IndentCalculatedPositionStateName
     */
    public $IndentCalculatedPositionStateName = null;
    /**
     * @var string $IndentCategories
     */
    public $IndentCategories = null;
    /**
     * @var string $IndentDeliveredPositionStateName
     */
    public $IndentDeliveredPositionStateName = null;
    /**
     * @var string $IndentDeliveryPositionStateName
     */
    public $IndentDeliveryPositionStateName = null;
    /**
     * @var string $IndentGeneralStatusName
     */
    public $IndentGeneralStatusName = null;
    /**
     * @var IndentInformationEventItem[] $IndentInformationEvents
     */
    public $IndentInformationEvents = null;
    /**
     * @var IndentInformationPositionItem[] $IndentInformationPositions
     */
    public $IndentInformationPositions = null;
    /**
     * @var int $IndentNumber
     */
    public $IndentNumber = null;
    /**
     * @var string $IndentNumberFull
     */
    public $IndentNumberFull = null;
    /**
     * @var string $IndentNumberPrefix
     */
    public $IndentNumberPrefix = null;
    /**
     * @var string $IndentNumberSuffix
     */
    public $IndentNumberSuffix = null;
    /**
     * @var string $IndentOrderPositionStateName
     */
    public $IndentOrderPositionStateName = null;
    /**
     * @var string $IndentUserEventName
     */
    public $IndentUserEventName = null;
    /**
     * @var boolean $IsClosed
     */
    public $IsClosed = null;
    /**
     * @var string $JobReference
     */
    public $JobReference = null;
    /**
     * @var LinkItemV1[] $LinkList
     */
    public $LinkList = null;
    /**
     * @var string $PostAdressMail
     */
    public $PostAdressMail = null;
    /**
     * @var string $PostAdressPhone
     */
    public $PostAdressPhone = null;
    /**
     * @var float $SellingPrice
     */
    public $SellingPrice = null;
    /**
     * @var dateTime $SollEndDatum
     */
    public $SollEndDatum = null;
    /**
     * @var string $TotalWeightOfLastDeliverNoteToCustomer
     */
    public $TotalWeightOfLastDeliverNoteToCustomer = null;
    /**
     * @var string $TrackingNumberOfLastDeliverNoteToCustomer
     */
    public $TrackingNumberOfLastDeliverNoteToCustomer = null;
    /**
     * @var dateTime $UpdateTime
     */
    public $UpdateTime = null;
    /**
     * @var dateTime $WishDeliveryDate
     */
    public $WishDeliveryDate = null;

    /**
     * @param float $BuyingPrice
     * @param float $CalculatedSellingPrice
     * @param dateTime $DateInsert
     * @param boolean $DepositManualUnblocked
     * @param int $IndentNumber
     * @param boolean $IsClosed
     * @param float $SellingPrice
     * @param dateTime $SollEndDatum
     * @param dateTime $UpdateTime
     */
    public function __construct($BuyingPrice, $CalculatedSellingPrice, $DateInsert, $DepositManualUnblocked, $IndentNumber, $IsClosed, $SellingPrice, $SollEndDatum, $UpdateTime)
    {
        $this->BuyingPrice = $BuyingPrice;
        $this->CalculatedSellingPrice = $CalculatedSellingPrice;
        $this->DateInsert = $DateInsert;
        $this->DepositManualUnblocked = $DepositManualUnblocked;
        $this->IndentNumber = $IndentNumber;
        $this->IsClosed = $IsClosed;
        $this->SellingPrice = $SellingPrice;
        $this->SollEndDatum = $SollEndDatum;
        $this->UpdateTime = $UpdateTime;
    }
}