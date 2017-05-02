<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetCollectiveInvoiceList
{
    /**
     * @var Promidata_Service_DTO_ShowDescriptionItem[] $GetCollectiveInvoiceListResult
     */
    public $GetCollectiveInvoiceListResult = null;

    /**
     * @param Promidata_Service_DTO_ShowDescriptionItem[] $GetCollectiveInvoiceListResult
     */
    public function __construct($GetCollectiveInvoiceListResult)
    {
        $this->GetCollectiveInvoiceListResult = $GetCollectiveInvoiceListResult;
    }
}