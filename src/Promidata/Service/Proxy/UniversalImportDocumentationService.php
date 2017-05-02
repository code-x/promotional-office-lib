<?php

/**
 * Proxy for Promidata PromotionalOffice UniversalImporterDocumentationService/UniversalImporterDocumentationService.
 *
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Proxy_UniversalImportDocumentationService extends Promidata_Service_Proxy_AbstractService implements Promidata_Service_Interface_IUniversalImportDocumentationService
{
    /**
     * Classmap.
     *
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        // DTO
        'ImporterDetails' => 'Promidata_Service_DTO_ImporterDetails',
        'ImportFieldInfo' => 'Promidata_Service_DTO_ImportFieldInfo',
        'ImporterDefinition' => 'Promidata_Service_DTO_ImporterDefinition',
        'CompositeImportFieldInfo' => 'Promidata_Service_DTO_CompositeImportFieldInfo',

        // Request
        'GetImporter' => 'Promidata_Service_Request_GetImporter',
        'GetImporterDetail' => 'Promidata_Service_Request_GetImporterDetail',

        // Response
        'GetImporterResponse' => 'Promidata_Service_Response_GetImporter',
        'GetImporterDetailResponse' => 'Promidata_Service_Response_GetImporterDetail'
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     * @param bool $debug Should we enable stack tracing?
     */
    public function __construct(
        $wsdl = 'http://promotionaloffice.cloudapp.net/PromotionalOffice/Services/UniversalImporter/UniversalImporterDocumentationService.svc?singleWsdl',
        array $options = array(),
        $debug = false
    ) {
        // Create stream_context to accept unsigned certificates in PHP >= 5.6.
        $options['stream_context'] = stream_context_create(
            array(
                'http' => array(
                    'user_agent' => 'PHPSoapClient'
                ),
                'https' => array(
                    'curl_verify_ssl_peer' => false,
                    'curl_verify_ssl_host' => false
                ),
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            )
        );
        $options['cache_wsdl'] = WSDL_CACHE_MEMORY;
        $options['compression'] = SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP;

        if ($debug == true) {
            $options['trace'] = true;
            $options['exceptions'] = true;
        }

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);

        // Set new endpoint location because of php authentication problems on soap 1.2 (php only supports basic with soap).
        $basic_endpoint = preg_replace(array('/http:/', '/\?.*/'), array('http:', ''), $wsdl) . '/basic';
        $this->__setLocation($basic_endpoint);
    }

    public function GetImporter(Promidata_Service_Request_GetImporter $parameters)
    {
        return $this->__soapCall('GetImporter', array($parameters));
    }

    public function GetImporterDetail(Promidata_Service_Request_GetImporterDetail $parameters)
    {
        return $this->__soapCall('GetImporterDetail', array($parameters));
    }
}