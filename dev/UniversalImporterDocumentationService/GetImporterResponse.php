<?php

class GetImporterResponse
{
    /**
     * @var ImporterDefinition[] $GetImporterResult
     */
    public $GetImporterResult = null;

    /**
     * @param ImporterDefinition[] $GetImporterResult
     */
    public function __construct($GetImporterResult)
    {
        $this->GetImporterResult = $GetImporterResult;
    }
}