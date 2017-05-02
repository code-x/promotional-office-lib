<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_TenderIndentImporterData
{
    /**
     * @var guid $AutomaticDeliveryConditionId
     */
    public $AutomaticDeliveryConditionId = null;
    /**
     * @var boolean $AvailabilityCheckEnabled
     */
    public $AvailabilityCheckEnabled = null;
    /**
     * @var string $Categorie
     */
    public $Categorie = null;
    /**
     * @var string $CustomerText
     */
    public $CustomerText = null;
    /**
     * @var int $DebitorNumber
     */
    public $DebitorNumber = null;
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterAddressData $DeliveryAddress
     */
    public $DeliveryAddress = null;
    /**
     * @var string $DeliveryTerm
     */
    public $DeliveryTerm = null;
    /**
     * @var string $DispatchType
     */
    public $DispatchType = null;
    /**
     * @var string $FooterText
     */
    public $FooterText = null;
    /**
     * @var string $HeaderText
     */
    public $HeaderText = null;
    /**
     * @var string $ImportType
     */
    public $ImportType = null;
    /**
     * @var string $ImportTypePrefix
     */
    public $ImportTypePrefix = null;
    /**
     * @var string $ImportTypeSuffix
     */
    public $ImportTypeSuffix = null;
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterAddressData $InvoiceAddress
     */
    public $InvoiceAddress = null;
    /**
     * @var string $Notice
     */
    public $Notice = null;
    /**
     * @var string[] $PaymentModeList
     */
    public $PaymentModeList = null;
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterPositionData[] $PositionList
     */
    public $PositionList = null;
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterAddressData $PostAddress
     */
    public $PostAddress = null;
    /**
     * @var string $StorageLocation
     */
    public $StorageLocation = null;
    /**
     * @var string $Warning
     */
    public $Warning = null;

    /**
     * @param int $DebitorNumber
     */
    public function __construct($DebitorNumber)
    {
        $this->DebitorNumber = $DebitorNumber;
    }
}