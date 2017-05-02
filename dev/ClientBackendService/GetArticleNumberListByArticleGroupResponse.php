<?php

class GetArticleNumberListByArticleGroupResponse
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