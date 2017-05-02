<?php

class GetProductConfigurationResponse
{
    /**
     * @var ProductConfiguration $GetProductConfigurationResult
     */
    public $GetProductConfigurationResult = null;

    /**
     * @param ProductConfiguration $GetProductConfigurationResult
     */
    public function __construct($GetProductConfigurationResult)
    {
        $this->GetProductConfigurationResult = $GetProductConfigurationResult;
    }
}