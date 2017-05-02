<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetUserInformation
{
    /**
     * @var Promidata_Service_DTO_UserInformation[] $GetUserInformationResult
     */
    public $GetUserInformationResult = null;

    /**
     * @param Promidata_Service_DTO_UserInformation[] $GetUserInformationResult
     */
    public function __construct($GetUserInformationResult)
    {
        $this->GetUserInformationResult = $GetUserInformationResult;
    }
}