<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_LinkItemV1
{
    /**
     * @var string $LinkName
     */
    public $LinkName = null;
    /**
     * @var string $LinkString
     */
    public $LinkString = null;

    /**
     * @param string $LinkName
     * @param string $LinkString
     */
    public function __construct($LinkName = null, $LinkString = null)
    {
        $this->LinkName = $LinkName;
        $this->LinkString = $LinkString;
    }
}