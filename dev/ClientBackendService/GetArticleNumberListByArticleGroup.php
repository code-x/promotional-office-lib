<?php

class GetArticleNumberListByArticleGroup
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