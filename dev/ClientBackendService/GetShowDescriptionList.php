<?php

class GetShowDescriptionList
{
    /**
     * @var ShowDescriptionListTypeEnum $showDescriptionListTypeEnum
     */
    public $showDescriptionListTypeEnum = null;

    /**
     * @param ShowDescriptionListTypeEnum $showDescriptionListTypeEnum
     */
    public function __construct($showDescriptionListTypeEnum)
    {
        $this->showDescriptionListTypeEnum = $showDescriptionListTypeEnum;
    }
}