<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetShowDescriptionList
{
    /**
     * @var Promidata_Service_Enum_ShowDescriptionListType $showDescriptionListTypeEnum
     */
    public $showDescriptionListTypeEnum = null;

    /**
     * @param Promidata_Service_Enum_ShowDescriptionListType $showDescriptionListTypeEnum
     */
    public function __construct(Promidata_Service_Enum_ShowDescriptionListType $showDescriptionListTypeEnum)
    {
        $this->showDescriptionListTypeEnum = $showDescriptionListTypeEnum;
    }
}