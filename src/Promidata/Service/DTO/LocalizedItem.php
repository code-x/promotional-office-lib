<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_LocalizedItem
{
    /**
     * @var string $Description
     */
    public $Description = null;
    /**
     * @var string $Show
     */
    public $Show = null;
    /**
     * @var Promidata_Service_DTO_LocalizationItem[] $Texts
     */
    public $Texts = null;

    public function __construct()
    {
    }
}