<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ArticleTextItem
{
    /**
     * @var Promidata_Service_Enum_ArticleLanguageType $ArticleLanguageType
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
     * @param Promidata_Service_Enum_ArticleLanguageType $ArticleLanguageType
     */
    public function __construct(Promidata_Service_Enum_ArticleLanguageType $ArticleLanguageType = null)
    {
        $this->ArticleLanguageType = $ArticleLanguageType;
    }
}