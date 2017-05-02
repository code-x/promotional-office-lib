<?php

include_once('GetImporter.php');
include_once('GetImporterResponse.php');
include_once('ImporterDefinition.php');
include_once('GetImporterDetail.php');
include_once('GetImporterDetailResponse.php');
include_once('ImporterDetails.php');
include_once('ImportFieldInfo.php');
include_once('CompositeImportFieldInfo.php');

class UniversalImportDocumentationService extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'GetImporter' => '\GetImporter',
        'GetImporterResponse' => '\GetImporterResponse',
        'ImporterDefinition' => '\ImporterDefinition',
        'GetImporterDetail' => '\GetImporterDetail',
        'GetImporterDetailResponse' => '\GetImporterDetailResponse',
        'ImporterDetails' => '\ImporterDetails',
        'ImportFieldInfo' => '\ImportFieldInfo',
        'CompositeImportFieldInfo' => '\CompositeImportFieldInfo'
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = 'http://webservice-po.dyndns.biz/Promidata/PromotionalOffice/Services/UniversalImporter/UniversalImporterDocumentationService.svc?wsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }
}