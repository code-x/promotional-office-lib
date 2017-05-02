<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Response_GetExpectedStockMovement
{
    /**
     * @var Promidata_Service_DTO_ExpectedStockMovement[] $GetExpectedStockMovementResult
     */
    public $GetExpectedStockMovementResult = null;

    /**
     * @param Promidata_Service_DTO_ExpectedStockMovement[] $GetExpectedStockMovementResult
     */
    public function __construct($GetExpectedStockMovementResult)
    {
        $this->GetExpectedStockMovementResult = $GetExpectedStockMovementResult;
    }
}