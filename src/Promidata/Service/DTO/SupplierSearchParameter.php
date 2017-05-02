<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_SupplierSearchParameter
{
    /**
     * Possible SearchKeys (for 2.11, could be extended at any time):
     * - CompanyName
     * - AnyPostCode
     * - AnyEmail
     * - CreditorNumber
     *
     * @var string $SearchKey
     */
    public $SearchKey = null;
    /**
     * @var anyType $SearchValue
     */
    public $SearchValue = null;

    /**
     * @param string $SearchKey
     * @param string $SearchValue
     */
    public function __construct($SearchKey = null, $SearchValue = null)
    {
        $this->SearchKey = $SearchKey;
        $this->SearchValue = new SoapVar($SearchValue, XSD_ANYTYPE, 'string', 'http://www.w3.org/2001/XMLSchema', 'Value');
    }
}