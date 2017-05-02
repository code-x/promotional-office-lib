<?php

class GetUserInformationResponse
{
    /**
     * @var UserInformation[] $GetUserInformationResult
     */
    public $GetUserInformationResult = null;

    /**
     * @param UserInformation[] $GetUserInformationResult
     */
    public function __construct($GetUserInformationResult)
    {
        $this->GetUserInformationResult = $GetUserInformationResult;
    }
}