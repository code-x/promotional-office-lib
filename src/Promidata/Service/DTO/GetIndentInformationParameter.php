<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_GetIndentInformationParameter
{
    /**
     * @var string $IndentNumberFull
     */
    public $IndentNumberFull = null;

    /**
     * @param string $IndentNumberFull
     */
    public function __construct($IndentNumberFull = null)
    {
        $this->IndentNumberFull = $IndentNumberFull;
    }
}