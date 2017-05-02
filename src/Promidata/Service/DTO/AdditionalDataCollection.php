<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_AdditionalDataCollection
{
    /**
     * @var Promidata_Service_DTO_AdditionalData[] $AdditionalDataItem
     */
    public $AdditionalDataItem = null;

    public function __construct()
    {
        $this->AdditionalDataItem = array();
    }

    public function Add($AdditionalDataKey = null, $Value = null, $Length = null)
    {
        if (!is_null($Value)) {
            $this->AddForce($AdditionalDataKey, $Value, $Length);
        }
    }

    public function AddForce($AdditionalDataKey = null, $Value = null, $Length = null)
    {
        if ($Length > 0) {
            $Value = substr($Value, 0, (int)$Length);
        }

        $this->AdditionalDataItem[] = new Promidata_Service_DTO_AdditionalData($AdditionalDataKey, $Value . '');
    }

    public function Update($AdditionalDataKey = null, $Value = null, $Length = null)
    {
        $this->Remove($AdditionalDataKey);
        $this->Add($AdditionalDataKey, $Value, $Length);
    }

    public function Remove($AdditionalDataKey = null)
    {
        if (!empty($AdditionalDataKey)) {
            $removeKey = null;
            foreach ($this->AdditionalDataItem as $key => $ImportFieldDataItem) {
                if ($ImportFieldDataItem->AdditionalDataKey == $AdditionalDataKey) {
                    $removeKey = $key;
                }
            }

            if (!is_null($removeKey)) {
                unset($this->AdditionalDataItem[$removeKey]);
                // Reorder keys
                $this->AdditionalDataItem = array_values($this->AdditionalDataItem);
            }
        }
    }
}