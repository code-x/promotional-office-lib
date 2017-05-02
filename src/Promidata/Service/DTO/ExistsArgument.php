<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ExistsArgument extends Promidata_Service_DTO_ImportDataBase
{
    /**
     * @var Promidata_Service_DTO_DataSelector $Selector
     */
    public $Selector = null;

    /**
     * @param guid $ImporterIdentifier
     * @param Promidata_Service_DTO_DataSelector $Selector
     */
    public function __construct($ImporterIdentifier, Promidata_Service_DTO_DataSelector $Selector)
    {
        parent::__construct($ImporterIdentifier);
        $this->Selector = $Selector;
    }
}