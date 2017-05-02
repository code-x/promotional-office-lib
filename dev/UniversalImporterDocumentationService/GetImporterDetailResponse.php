<?php

class GetImporterDetailResponse
{
    /**
     * @var ImporterDetails $GetImporterDetailResult
     */
    public $GetImporterDetailResult = null;

    /**
     * @param ImporterDetails $GetImporterDetailResult
     */
    public function __construct($GetImporterDetailResult)
    {
        $this->GetImporterDetailResult = $GetImporterDetailResult;
    }
}