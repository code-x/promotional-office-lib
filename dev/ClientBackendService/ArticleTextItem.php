<?php

class ArticleTextItem
{
    /**
     * @var ArticleLanguageTypeEnum $ArticleLanguageType
     */
    public $ArticleLanguageType = null;
    /**
     * @var string $Language
     */
    public $Language = null;
    /**
     * @var string $Value
     */
    public $Value = null;

    /**
     * @param ArticleLanguageTypeEnum $ArticleLanguageType
     */
    public function __construct($ArticleLanguageType)
    {
        $this->ArticleLanguageType = $ArticleLanguageType;
    }
}