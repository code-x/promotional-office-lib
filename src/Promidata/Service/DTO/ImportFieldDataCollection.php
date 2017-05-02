<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_DTO_ImportFieldDataCollection
{
    /**
     * @var Promidata_Service_DTO_ImportFieldData[] $ImportFieldDataItem
     */
    public $ImportFieldDataItem = null;

    public function Add($FieldIdentifier = null, $FieldData = null, $Options = null, $Length = null)
    {
        if (!empty($FieldData)) {
            $this->AddForce($FieldIdentifier, $FieldData, $Options, $Length);
        }
    }

    public function AddForce($FieldIdentifier = null, $FieldData = null, $Options = null, $Length = null)
    {
        if ($Length > 0) {
            $FieldData = substr($FieldData, 0, (int)$Length);
        }

        $this->ImportFieldDataItem[] = new Promidata_Service_DTO_ImportFieldData(
            $FieldIdentifier,
            $FieldData . '',
            $Options
        );
    }

    public function AddLanguage($FieldIdentifier = null, $FieldData = null, $language, $Length = null)
    {
        $this->Add(
            $FieldIdentifier,
            $FieldData,
            array(
                new Promidata_Service_DTO_KeyValuePairOfstringstring('Language', $language)
            ),
            $Length
        );
    }

    public function Update($FieldIdentifier = null, $FieldData = null, $Options = null, $Length = null)
    {
        $this->Remove($FieldIdentifier);
        $this->Add($FieldIdentifier, $FieldData, $Options, $Length);
    }

    public function Remove($FieldIdentifier = null)
    {
        if (!empty($FieldIdentifier)) {
            $removeKey = null;
            foreach ($this->ImportFieldDataItem as $key => $ImportFieldDataItem) {
                if ($ImportFieldDataItem->FieldIdentifier == $FieldIdentifier) {
                    $removeKey = $key;
                }
            }

            if (!is_null($removeKey)) {
                unset($this->ImportFieldDataItem[$removeKey]);
                // Reorder keys
                $this->ImportFieldDataItem = array_values($this->ImportFieldDataItem);
            }
        }
    }

    public function __construct()
    {
        $this->ImportFieldDataItem = array();
    }
}