<?php

class GetCollectiveInvoiceListResponse
{
    /**
     * @var ShowDescriptionItem[] $GetCollectiveInvoiceListResult
     */
    public $GetCollectiveInvoiceListResult = null;

    /**
     * @param ShowDescriptionItem[] $GetCollectiveInvoiceListResult
     */
    public function __construct($GetCollectiveInvoiceListResult)
    {
        $this->GetCollectiveInvoiceListResult = $GetCollectiveInvoiceListResult;
    }
}