<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_Update
{
    /**
     * @var Promidata_Service_DTO_DataSelector $dataSelector
     */
    public $dataSelector = null;
    /**
     *
     * @var Promidata_Service_DTO_ImportData $importData
     */
    public $importData = null;

    /**
     * @param Promidata_Service_DTO_DataSelector $dataSelector
     * @param Promidata_Service_DTO_ImportData $importData
     */
    public function __construct($dataSelector, $importData)
    {
        $this->dataSelector = $dataSelector;
        $this->importData = $importData;
    }
}