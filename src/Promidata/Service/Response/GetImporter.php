<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetImporter
{
    /**
     * @var Promidata_Service_DTO_ImporterDefinition[] $GetImporterResult
     */
    public $GetImporterResult = null;

    /**
     * @param Promidata_Service_DTO_ImporterDefinition[] $GetImporterResult
     */
    public function __construct($GetImporterResult)
    {
        $this->GetImporterResult = $GetImporterResult;
    }
}