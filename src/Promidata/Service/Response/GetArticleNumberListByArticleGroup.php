<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetArticleNumberListByArticleGroup
{
    /**
     * @var string[] $GetArticleNumberListByArticleGroupResult
     */
    public $GetArticleNumberListByArticleGroupResult = null;

    /**
     * @param string[] $GetArticleNumberListByArticleGroupResult
     */
    public function __construct($GetArticleNumberListByArticleGroupResult)
    {
        $this->GetArticleNumberListByArticleGroupResult = $GetArticleNumberListByArticleGroupResult;
    }
}