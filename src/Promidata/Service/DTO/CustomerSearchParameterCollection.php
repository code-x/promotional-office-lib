<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_CustomerSearchParameterCollection
{
    /**
     * @var Promidata_Service_DTO_CustomerSearchParameter[] $CustomerSearchItems
     */
    public $CustomerSearchItems = null;

    public function Add($SearchKey = null, $SearchValue = null, $Length = null)
    {
        if (!is_null($SearchValue)) {
            if ($Length > 0) {
                $SearchValue = substr($SearchValue, 0, (int)$Length);
            }

            $this->CustomerSearchItems[] = new Promidata_Service_DTO_CustomerSearchParameter($SearchKey, $SearchValue);
        }

        return $this;
    }

    public function __construct()
    {
        $this->CustomerSearchItems = array();
    }

    /**
     * @return array|Promidata_Service_DTO_CustomerSearchParameter[]
     */
    public function getSearchItems()
    {
        return $this->CustomerSearchItems;
    }
}