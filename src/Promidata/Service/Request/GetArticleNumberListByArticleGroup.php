<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Request_GetArticleNumberListByArticleGroup
{
    /**
     * @var string $articleGroupName
     */
    public $articleGroupName = null;

    /**
     * @param string $articleGroupName
     */
    public function __construct($articleGroupName)
    {
        $this->articleGroupName = $articleGroupName;
    }
}