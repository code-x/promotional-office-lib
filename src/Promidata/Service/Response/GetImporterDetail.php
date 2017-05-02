<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetImporterDetail
{
    /**
     * @var Promidata_Service_DTO_ImporterDetails $GetImporterDetailResult
     */
    public $GetImporterDetailResult = null;

    /**
     * @param Promidata_Service_DTO_ImporterDetails $GetImporterDetailResult
     */
    public function __construct($GetImporterDetailResult)
    {
        $this->GetImporterDetailResult = $GetImporterDetailResult;
    }
}