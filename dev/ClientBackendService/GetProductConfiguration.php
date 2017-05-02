<?php

class GetProductConfiguration
{
    /**
     * @var GetProductConfigurationParameter $parameter
     */
    public $parameter = null;

    /**
     * @param GetProductConfigurationParameter $parameter
     */
    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }
}