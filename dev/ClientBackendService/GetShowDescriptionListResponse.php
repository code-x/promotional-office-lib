<?php

class GetShowDescriptionListResponse
{
    /**
     * @var ShowDescriptionItem[] $GetShowDescriptionListResult
     */
    public $GetShowDescriptionListResult = null;

    /**
     * @param ShowDescriptionItem[] $GetShowDescriptionListResult
     */
    public function __construct($GetShowDescriptionListResult)
    {
        $this->GetShowDescriptionListResult = $GetShowDescriptionListResult;
    }
}