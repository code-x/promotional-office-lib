<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ProductIdentifier
{
    /**
     * @var int $ProductId
     */
    public $ProductId = null;
    /**
     * @var string $ProductNumber
     */
    public $ProductNumber = null;
    /**
     * @var guid $ProductUniqueId
     */
    public $ProductUniqueId = null;

    /**
     * @param guid $ProductUniqueId
     */
    public function __construct($ProductUniqueId = null)
    {
        $this->ProductUniqueId = $ProductUniqueId;
    }
}