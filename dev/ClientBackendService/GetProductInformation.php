<?php

class GetProductInformation
{
    /**
     * @var string $ownArticleNumber
     */
    public $ownArticleNumber = null;

    /**
     * @param string $ownArticleNumber
     */
    public function __construct($ownArticleNumber)
    {
        $this->ownArticleNumber = $ownArticleNumber;
    }
}