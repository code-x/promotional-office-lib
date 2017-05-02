<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetPossibleAutomaticConditionList
{
    /**
     * @var Promidata_Service_DTO_TenderIndentImporterData $importdata
     */
    public $importdata = null;
    /**
     * @var string[] $possibleDispatchTypes
     */
    public $possibleDispatchTypes = null;

    /**
     * @param Promidata_Service_DTO_TenderIndentImporterData $importdata
     * @param string[] $possibleDispatchTypes
     */
    public function __construct(Promidata_Service_DTO_TenderIndentImporterData $importdata, $possibleDispatchTypes)
    {
        $this->importdata = $importdata;
        $this->possibleDispatchTypes = $possibleDispatchTypes;
    }
}