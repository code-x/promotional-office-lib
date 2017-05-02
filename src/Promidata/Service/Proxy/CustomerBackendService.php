<?php

/**
 * Proxy for Promidata PromotionalOffice ClientBackendService/CustomerbackendService.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
class Promidata_Service_Proxy_CustomerBackendService extends Promidata_Service_Proxy_AbstractService implements Promidata_Service_Interface_ICustomerBackendService
{
    /**
     * Classmap.
     *
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        // DTO
        'ArticleTextItem' => 'Promidata_Service_DTO_ArticleTextItem',
        'AutomaticCondition' => 'Promidata_Service_DTO_AutomaticCondition',
        'ChangePurchaseOrderActionParameter' => 'Promidata_Service_DTO_ChangePurchaseOrderActionParameter',
        'ChangePurchaseOrderActionResult' => 'Promidata_Service_DTO_ChangePurchaseOrderActionResult',
        'ColorSizeCombination' => 'Promidata_Service_DTO_ColorSizeCombination',
        'ComplexAddress' => 'Promidata_Service_DTO_ComplexAddress',
        'ContactDetail' => 'Promidata_Service_DTO_ContactDetail',
        'ContactPersonInformation' => 'Promidata_Service_DTO_ContactPersonInformation',
        'CurrencyItem' => 'Promidata_Service_DTO_CurrencyItem',
        'CustomerIdentifier' => 'Promidata_Service_DTO_CustomerIdentifier',
        'CustomerInformation' => 'Promidata_Service_DTO_CustomerInformation',
        'CustomerSearchParameter' => 'Promidata_Service_DTO_CustomerSearchParameter',
        'CustomerSearchResult' => 'Promidata_Service_DTO_CustomerSearchResult',
        'ExpectedStockMovement' => 'Promidata_Service_DTO_ExpectedStockMovement',
        'GetIndentInformationParameter' => 'Promidata_Service_DTO_GetIndentInformationParameter',
        'GetPossibleAutomaticConditionListResult' => 'Promidata_Service_DTO_GetPossibleAutomaticConditionListResult',
        'GetProductConfigurationParameter' => 'Promidata_Service_DTO_GetProductConfigurationParameter',
        'ImportInformation' => 'Promidata_Service_DTO_ImportInformation',
        'IndentInformationBettermentItem' => 'Promidata_Service_DTO_IndentInformationBettermentItem',
        'IndentInformationEventItem' => 'Promidata_Service_DTO_IndentInformationEventItem',
        'IndentInformationItem' => 'Promidata_Service_DTO_IndentInformationItem',
        'IndentInformationPositionItem' => 'Promidata_Service_DTO_IndentInformationPositionItem',
        'LinkItemV1' => 'Promidata_Service_DTO_LinkItemV1',
        'LocalizationItem' => 'Promidata_Service_DTO_LocalizationItem',
        'LocalizedItem' => 'Promidata_Service_DTO_LocalizedItem',
        'PaymentInformation' => 'Promidata_Service_DTO_PaymentInformation',
        'ProductConfiguration' => 'Promidata_Service_DTO_ProductConfiguration',
        'ProductConfigurationItem' => 'Promidata_Service_DTO_ProductConfigurationItem',
        'ProductConfigurationColorItem' => 'Promidata_Service_DTO_ProductConfigurationColorItem',
        'ProductConfigurationSizeItem' => 'Promidata_Service_DTO_ProductConfigurationSizeItem',
        'ProductIdentifier' => 'Promidata_Service_DTO_ProductIdentifier',
        'ProductInformation' => 'Promidata_Service_DTO_ProductInformation',
        'ProductPriceInformation' => 'Promidata_Service_DTO_ProductPriceInformation',
        'ProductSearchParameter' => 'Promidata_Service_DTO_ProductSearchParameter',
        'ProductSearchResult' => 'Promidata_Service_DTO_ProductSearchResult',
        'PurchaseOrderAction' => 'Promidata_Service_DTO_PurchaseOrderAction',
        'PurchaseOrderBettermentItem' => 'Promidata_Service_DTO_PurchaseOrderBettermentItem',
        'PurchaseOrderIdentifier' => 'Promidata_Service_DTO_PurchaseOrderIdentifier',
        'PurchaseOrderInformation' => 'Promidata_Service_DTO_PurchaseOrderInformation',
        'PurchaseOrderPositionItem' => 'Promidata_Service_DTO_PurchaseOrderPositionItem',
        'PurchaseOrderSearchParameter' => 'Promidata_Service_DTO_PurchaseOrderSearchParameter',
        'PurchaseOrderSearchResult' => 'Promidata_Service_DTO_PurchaseOrderSearchResult',
        'ShowDescriptionItem' => 'Promidata_Service_DTO_ShowDescriptionItem',
        'SimpleAddress' => 'Promidata_Service_DTO_SimpleAddress',
        'SupplierSearchParameter' => 'Promidata_Service_DTO_SupplierSearchParameter',
        'SupplierSearchResult' => 'Promidata_Service_DTO_SupplierSearchResult',
        'TenderIndentImporterAddressData' => 'Promidata_Service_DTO_TenderIndentImporterAddressData',
        'TenderIndentImporterBettermentData' => 'Promidata_Service_DTO_TenderIndentImporterBettermentData',
        'TenderIndentImporterData' => 'Promidata_Service_DTO_TenderIndentImporterData',
        'TenderIndentImporterPositionData' => 'Promidata_Service_DTO_TenderIndentImporterPositionData',
        'TenderIndentImporterRelayData' => 'Promidata_Service_DTO_TenderIndentImporterRelayData',
        'TranslationItem' => 'Promidata_Service_DTO_TranslationItem',
        'UserInformation' => 'Promidata_Service_DTO_UserInformation',
        'ArticleDynamicDataItem' => 'Promidata_Service_DTO_ArticleDynamicDataItem',
        'ArticleDynamicLanguageDataItem' => 'Promidata_Service_DTO_ArticleDynamicLanguageDataItem',
        'OptionItem' => 'Promidata_Service_DTO_OptionItem',
        'OptionTypeItem' => 'Promidata_Service_DTO_OptionTypeItem',

        // Enum
        'ArticleLanguageTypeEnum' => 'Promidata_Service_Enum_ArticleLanguageType',
        'ArticleTypeEnum' => 'Promidata_Service_Enum_ArticleType',
        'GenderType' => 'Promidata_Service_Enum_GenderType',
        'ShowDescriptionListTypeEnum' => 'Promidata_Service_Enum_ShowDescriptionListType',

        // Request
        'ChangePurchaseOrderAction' => 'Promidata_Service_Request_ChangePurchaseOrderAction',
        'GetArticleNumberListByArticleGroup' => 'Promidata_Service_Request_GetArticleNumberListByArticleGroup',
        'GetCollectiveInvoiceList' => 'Promidata_Service_Request_GetCollectiveInvoiceList',
        'GetCurrencyList' => 'Promidata_Service_Request_GetCurrencyList',
        'GetCustomerInformation' => 'Promidata_Service_Request_GetCustomerInformation',
        'GetCustomerInformationList' => 'Promidata_Service_Request_GetCustomerInformationList',
        'GetCustomerPriceList' => 'Promidata_Service_Request_GetCustomerPriceList',
        'GetDeliveryTermList' => 'Promidata_Service_Request_GetDeliveryTermList',
        'GetDispatchTypeList' => 'Promidata_Service_Request_GetDispatchTypeList',
        'GetExpectedStockMovement' => 'Promidata_Service_Request_GetExpectedStockMovement',
        'GetIndentInformation' => 'Promidata_Service_Request_GetIndentInformation',
        'GetPaymentInformationList' => 'Promidata_Service_Request_GetPaymentInformationList',
        'GetPossibleAutomaticConditionList' => 'Promidata_Service_Request_GetPossibleAutomaticConditionList',
        'GetProductConfiguration' => 'Promidata_Service_Request_GetProductConfiguration',
        'GetProductInformation' => 'Promidata_Service_Request_GetProductInformation',
        'GetProductInformationByProductIdentifier' => 'Promidata_Service_Request_GetProductInformationByProductIdentifier',
        'GetProductPriceList' => 'Promidata_Service_Request_GetProductPriceList',
        'GetProductPrices' => 'Promidata_Service_Request_GetProductPrices',
        'GetPurchaseOrderActionList' => 'Promidata_Service_Request_GetPurchaseOrderActionList',
        'GetPurchaseOrderInformation' => 'Promidata_Service_Request_GetPurchaseOrderInformation',
        'GetShowDescriptionList' => 'Promidata_Service_Request_GetShowDescriptionList',
        'GetUserInformation' => 'Promidata_Service_Request_GetUserInformation',
        'Logon' => 'Promidata_Service_Request_Logon',
        'SearchCustomer' => 'Promidata_Service_Request_SearchCustomer',
        'SearchProduct' => 'Promidata_Service_Request_SearchProduct',
        'SearchPurchaseOrder' => 'Promidata_Service_Request_SearchPurchaseOrder',
        'SearchSupplier' => 'Promidata_Service_Request_SearchSupplier',
        'GetOptionList' => 'Promidata_Service_Request_GetOptionList',
        'GetOptionTypeList' => 'Promidata_Service_Request_GetOptionTypeList',

        // Response
        'ChangePurchaseOrderActionResponse' => 'Promidata_Service_Response_ChangePurchaseOrderAction',
        'GetArticleNumberListByArticleGroupResponse' => 'Promidata_Service_Response_GetArticleNumberListByArticleGroup',
        'GetCollectiveInvoiceListResponse' => 'Promidata_Service_Response_GetCollectiveInvoiceList',
        'GetCurrencyListResponse' => 'Promidata_Service_Response_GetCurrencyList',
        'GetCustomerInformationResponse' => 'Promidata_Service_Response_GetCustomerInformation',
        'GetCustomerInformationListResponse' => 'Promidata_Service_Response_GetCustomerInformationList',
        'GetCustomerPriceListResponse' => 'Promidata_Service_Response_GetCustomerPriceList',
        'GetDeliveryTermListResponse' => 'Promidata_Service_Response_GetDeliveryTermList',
        'GetDispatchTypeListResponse' => 'Promidata_Service_Response_GetDispatchTypeList',
        'GetExpectedStockMovementResponse' => 'Promidata_Service_Response_GetExpectedStockMovement',
        'GetIndentInformationResponse' => 'Promidata_Service_Response_GetIndentInformation',
        'GetPaymentInformationListResponse' => 'Promidata_Service_Response_GetPaymentInformationList',
        'GetPossibleAutomaticConditionListReponse' => 'Promidata_Service_Response_GetPossibleAutomaticConditionList',
        'GetProductConfigurationResponse' => 'Promidata_Service_Response_GetProductConfiguration',
        'GetProductInformationResponse' => 'Promidata_Service_Response_GetProductInformation',
        'GetProductInformationByProductIdentifierResponse' => 'Promidata_Service_Response_GetProductInformationByProductIdentifier',
        'GetProductPriceListResponse' => 'Promidata_Service_Response_GetProductPriceList',
        'GetProductPricesResponse' => 'Promidata_Service_Response_GetProductPrices',
        'GetPurchaseOrderActionListResponse' => 'Promidata_Service_Response_GetPurchaseOrderActionList',
        'GetPurchaseOrderInformationResponse' => 'Promidata_Service_Response_GetPurchaseOrderInformation',
        'GetShowDescriptionListResponse' => 'Promidata_Service_Response_GetShowDescriptionList',
        'GetUserInformationResponse' => 'Promidata_Service_Response_GetUserInformation',
        'LogonResponse' => 'Promidata_Service_Response_Logon',
        'SearchCustomerResponse' => 'Promidata_Service_Response_SearchCustomer',
        'SearchProductResponse' => 'Promidata_Service_Response_SearchProduct',
        'SearchPurchaseOrderResponse' => 'Promidata_Service_Response_SearchPurchaseOrder',
        'SearchSupplierResponse' => 'Promidata_Service_Response_SearchSupplier',
        'GetOptionListResponse' => 'Promidata_Service_Response_GetOptionList',
        'GetOptionTypeListResponse' => 'Promidata_Service_Response_GetOptionTypeList'
    );

    /**
     * Constructor.
     *
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @param bool $debug Should we enable stack tracing?
     */
    public function __construct(
        $wsdl = 'https://promotionaloffice.cloudapp.net/PromotionalOffice/Services/Info/ClientBackendService.svc?singleWsdl',
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
    }

    public function Logon(Promidata_Service_Request_Logon $parameters)
    {
        return $this->__soapCall('Logon', array($parameters));
    }

    public function GetProductInformation(Promidata_Service_Request_GetProductInformation $parameters)
    {
        return $this->__soapCall('GetProductInformation', array($parameters));
    }

    public function GetProductInformationByProductIdentifier(Promidata_Service_Request_GetProductInformationByProductIdentifier $parameters)
    {
        return $this->__soapCall('GetProductInformationByProductIdentifier', array($parameters));
    }

    public function GetProductPrices(Promidata_Service_Request_GetProductPrices $parameters)
    {
        return $this->__soapCall('GetProductPrices', array($parameters));
    }

    public function GetExpectedStockMovement(Promidata_Service_Request_GetExpectedStockMovement $parameters)
    {
        return $this->__soapCall('GetExpectedStockMovement', array($parameters));
    }

    public function GetProductPriceList(Promidata_Service_Request_GetProductPriceList $parameters)
    {
        return $this->__soapCall('GetProductPriceList', array($parameters));
    }

    public function GetCustomerInformation(Promidata_Service_Request_GetCustomerInformation $parameters)
    {
        return $this->__soapCall('GetCustomerInformation', array($parameters));
    }

    public function GetCustomerInformationList(Promidata_Service_Request_GetCustomerInformationList $parameters)
    {
        return $this->__soapCall('GetCustomerInformationList', array($parameters));
    }

    public function GetUserInformation(Promidata_Service_Request_GetUserInformation $parameters)
    {
        return $this->__soapCall('GetUserInformation', array($parameters));
    }

    public function GetCustomerPriceList(Promidata_Service_Request_GetCustomerPriceList $parameters)
    {
        return $this->__soapCall('GetCustomerPriceList', array($parameters));
    }

    public function GetPossibleAutomaticConditionList(Promidata_Service_Request_GetPossibleAutomaticConditionList $parameters)
    {
        return $this->__soapCall('GetPossibleAutomaticConditionList', array($parameters));
    }

    public function GetArticleNumberListByArticleGroup(Promidata_Service_Request_GetArticleNumberListByArticleGroup $parameters)
    {
        return $this->__soapCall('GetArticleNumberListByArticleGroup', array($parameters));
    }

    public function SearchCustomer(Promidata_Service_Request_SearchCustomer $parameters)
    {
        return $this->__soapCall('SearchCustomer', array($parameters));
    }

    public function SearchSupplier(Promidata_Service_Request_SearchSupplier $parameters)
    {
        return $this->__soapCall('SearchSupplier', array($parameters));
    }

    public function SearchProduct(Promidata_Service_Request_SearchProduct $parameters)
    {
        return $this->__soapCall('SearchProduct', array($parameters));
    }

    public function GetShowDescriptionList(Promidata_Service_Request_GetShowDescriptionList $parameters)
    {
        return $this->__soapCall('GetShowDescriptionList', array($parameters));
    }

    public function GetCurrencyList(Promidata_Service_Request_GetCurrencyList $parameters)
    {
        return $this->__soapCall('GetCurrencyList', array($parameters));
    }

    public function GetPaymentInformationList(Promidata_Service_Request_GetPaymentInformationList $parameters)
    {
        return $this->__soapCall('GetPaymentInformationList', array($parameters));
    }

    public function GetDispatchTypeList(Promidata_Service_Request_GetDispatchTypeList $parameters)
    {
        return $this->__soapCall('GetDispatchTypeList', array($parameters));
    }

    public function GetDeliveryTermList(Promidata_Service_Request_GetDeliveryTermList $parameters)
    {
        return $this->__soapCall('GetDeliveryTermList', array($parameters));
    }

    public function GetCollectiveInvoiceList(Promidata_Service_Request_GetCollectiveInvoiceList $parameters)
    {
        return $this->__soapCall('GetCollectiveInvoiceList', array($parameters));
    }

    public function GetIndentInformation(Promidata_Service_Request_GetIndentInformation $parameters)
    {
        return $this->__soapCall('GetIndentInformation', array($parameters));
    }

    public function GetProductConfiguration(Promidata_Service_Request_GetProductConfiguration $parameters)
    {
        return $this->__soapCall('GetProductConfiguration', array($parameters));
    }

    public function SearchPurchaseOrder(Promidata_Service_Request_SearchPurchaseOrder $parameters)
    {
        return $this->__soapCall('SearchPurchaseOrder', array($parameters));
    }

    public function GetPurchaseOrderInformation(Promidata_Service_Request_GetPurchaseOrderInformation $parameters)
    {
        return $this->__soapCall('GetPurchaseOrderInformation', array($parameters));
    }

    public function ChangePurchaseOrderAction(Promidata_Service_Request_ChangePurchaseOrderAction $parameters)
    {
        return $this->__soapCall('ChangePurchaseOrderAction', array($parameters));
    }

    public function GetPurchaseOrderActionList(Promidata_Service_Request_GetPurchaseOrderActionList $parameters)
    {
        return $this->__soapCall('GetPurchaseOrderActionList', array($parameters));
    }

    public function GetOptionList(Promidata_Service_Request_GetOptionList $parameters)
    {
        return $this->__soapCall('GetOptionList', array($parameters));
    }

    public function GetOptionTypeList(Promidata_Service_Request_GetOptionTypeList $parameters)
    {
        return $this->__soapCall('GetOptionTypeList', array($parameters));
    }
}