<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ImportData extends Promidata_Service_DTO_ImportDataBase
{
    /**
     * @var Promidata_Service_DTO_ImportFieldDataCollection $ImportFields
     */
    public $ImportFields = null;
    /**
     * @var Promidata_Service_DTO_AdditionalDataCollection $AdditionalData
     */
    public $AdditionalData = null;

    /**
     * @param guid $ImporterIdentifier
     */
    public function __construct($ImporterIdentifier)
    {
        parent::__construct($ImporterIdentifier);
    }
}