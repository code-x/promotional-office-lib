<?php

class GetIndentInformation
{
    /**
     * @var GetIndentInformationParameter $parameter
     */
    public $parameter = null;

    /**
     * @param GetIndentInformationParameter $parameter
     */
    public function __construct($parameter)
    {
        $this->parameter = $parameter;
    }
}