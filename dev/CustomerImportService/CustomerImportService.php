<?php

include_once('ImportDataBase.php');
include_once('ExistsArgument.php');
include_once('KeyValuePairOfstringstring.php');
include_once('KeyValueOfstringanyType.php');
include_once('Import.php');
include_once('ImportData.php');
include_once('ImportFieldDataCollection.php');
include_once('ImportFieldData.php');
include_once('AdditionalDataCollection.php');
include_once('AdditionalData.php');
include_once('ImportResponse.php');
include_once('ImportResult.php');
include_once('Update.php');
include_once('DataSelector.php');
include_once('UpdateResponse.php');
include_once('Exists.php');
include_once('ExistsResponse.php');
include_once('ExistsResult.php');
include_once('SystemException.php');
include_once('ExceptionCustom.php');
include_once('FaultException.php');
include_once('CommunicationException.php');
include_once('FaultExceptionFaultReasonData.php');
include_once('FaultExceptionFaultCodeData.php');

class CustomerImportService extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'ImportDataBase' => '\ImportDataBase',
        'ExistsArgument' => '\ExistsArgument',
        'KeyValuePairOfstringstring' => '\KeyValuePairOfstringstring',
        'KeyValueOfstringanyType' => '\KeyValueOfstringanyType',
        'Import' => '\Import',
        'ImportData' => '\ImportData',
        'ImportFieldDataCollection' => '\ImportFieldDataCollection',
        'ImportFieldData' => '\ImportFieldData',
        'AdditionalDataCollection' => '\AdditionalDataCollection',
        'AdditionalData' => '\AdditionalData',
        'ImportResponse' => '\ImportResponse',
        'ImportResult' => '\ImportResult',
        'Update' => '\Update',
        'DataSelector' => '\DataSelector',
        'UpdateResponse' => '\UpdateResponse',
        'Exists' => '\Exists',
        'ExistsResponse' => '\ExistsResponse',
        'ExistsResult' => '\ExistsResult',
        'SystemException' => '\SystemException',
        'Exception' => '\ExceptionCustom',
        'FaultException' => '\FaultException',
        'CommunicationException' => '\CommunicationException',
        'FaultException.FaultReasonData' => '\FaultExceptionFaultReasonData',
        'FaultException.FaultCodeData' => '\FaultExceptionFaultCodeData'
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice-po.dyndns.biz/Promidata/PromotionalOffice/Services/UniversalImporter/CustomerImportService.svc?wsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }
}