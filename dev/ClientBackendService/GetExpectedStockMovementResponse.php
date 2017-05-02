<?php

class GetExpectedStockMovementResponse
{
    /**
     * @var ExpectedStockMovement[] $GetExpectedStockMovementResult
     */
    public $GetExpectedStockMovementResult = null;

    /**
     * @param ExpectedStockMovement[] $GetExpectedStockMovementResult
     */
    public function __construct($GetExpectedStockMovementResult)
    {
        $this->GetExpectedStockMovementResult = $GetExpectedStockMovementResult;
    }
}