<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetShowDescriptionList
{
    /**
     * @var Promidata_Service_DTO_ShowDescriptionItem[] $GetShowDescriptionListResult
     */
    public $GetShowDescriptionListResult = null;

    /**
     * @param Promidata_Service_DTO_ShowDescriptionItem[] $GetShowDescriptionListResult
     */
    public function __construct($GetShowDescriptionListResult)
    {
        $this->GetShowDescriptionListResult = $GetShowDescriptionListResult;
    }
}