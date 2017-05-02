<?php

/**
 * Interface for Promidata PromotionalOffice UniversalImporterDocumentationService/UniversalImporterDocumentationService.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
interface Promidata_Service_Interface_IUniversalImportDocumentationService
{
    /**
     * @param Promidata_Service_Request_GetImporter $getImporterRequest
     *
     * @return Promidata_Service_Response_GetImporter
     */
    public function GetImporter(Promidata_Service_Request_GetImporter $getImporterRequest);

    /**
     * @param Promidata_Service_Request_GetImporterDetail $getImporterDetailRequest
     *
     * @return Promidata_Service_Response_GetImporterDetail
     */
    public function GetImporterDetail(Promidata_Service_Request_GetImporterDetail $getImporterDetailRequest);
}