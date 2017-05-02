<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_LocalizationItem
{
    /**
     * @var string $Description
     */
    public $Description = null;
    /**
     * @var string $Language
     */
    public $Language = null;
    /**
     * @var string $Show
     */
    public $Show = null;

    /**
     * @param string $Show
     * @param string $Description
     * @param string $Language
     */
    public function __construct($Show = null, $Description = null, $Language = null)
    {
        $this->Show = $Show;
        $this->Description = $Description;
        $this->Language = $Language;
    }
}