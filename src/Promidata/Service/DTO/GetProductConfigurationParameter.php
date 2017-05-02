<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_GetProductConfigurationParameter
{
    /**
     * @var string $OwnArticleNumber
     */
    public $OwnArticleNumber = null;
    /**
     * @var guid $ProductIdentifier
     */
    public $ProductIdentifier = null;

    /**
     * One of each parameter is enough to identify a product in most cases.
     * The ProductIdentifier is always unique.
     *
     * @param string $ProductIdentifier
     * @param string $OwnArticleNumber
     */
    public function __construct($ProductIdentifier = null, $OwnArticleNumber = null)
    {
        $this->ProductIdentifier = $ProductIdentifier;
        $this->OwnArticleNumber = $OwnArticleNumber;
    }
}