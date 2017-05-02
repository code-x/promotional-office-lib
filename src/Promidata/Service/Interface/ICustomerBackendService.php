<?php

/**
 * Interface for Promidata PromotionalOffice ClientBackendService/CustomerbackendService.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
interface Promidata_Service_Interface_ICustomerBackendService
{
    /**
     * @brief Authenticate with your Promotional Office Login Data.
     * @detail Needs to be called at first access
     *
     * @param Promidata_Service_Request_Logon $logonRequest
     *
     * @return Promidata_Service_Response_Logon
     */
    public function Logon(Promidata_Service_Request_Logon $logonRequest);

    /**
     * @brief Retrieves a Promidata_Service_Request_GetProductInformation.
     *
     * @param Promidata_Service_Request_GetProductInformation $getProductInformationRequest
     *
     * @return Promidata_Service_Response_GetProductInformation
     */
    public function GetProductInformation(Promidata_Service_Request_GetProductInformation $getProductInformationRequest);

    /**
     * @brief Retrieves a Promidata_Service_Request_GetProductInformationByProductIdentifier.
     *
     * @param Promidata_Service_Request_GetProductInformationByProductIdentifier $getProductInformationByProductIdentifierRequest
     *
     * @return Promidata_Service_Response_GetProductInformationByProductIdentifier
     */
    public function GetProductInformationByProductIdentifier(Promidata_Service_Request_GetProductInformationByProductIdentifier $getProductInformationByProductIdentifierRequest);

    /**
     * @brief Returns the price relays of a product for a specific customer.
     * It takes care on special prices for the given customer
     *
     * @param Promidata_Service_Request_GetProductPrices $getProductPricesRequest
     *
     * @return Promidata_Service_Response_GetProductPrices
     */
    public function GetProductPrices(Promidata_Service_Request_GetProductPrices $getProductPricesRequest);

    /**
     * @brief Returns the expected stock movements of a specific product.
     *
     * @param Promidata_Service_Request_GetExpectedStockMovement $getExpectedStockMovementRequest
     *
     * @return Promidata_Service_Response_GetExpectedStockMovement
     */
    public function GetExpectedStockMovement(Promidata_Service_Request_GetExpectedStockMovement $getExpectedStockMovementRequest);

    /**
     * @brief Returns the price relays of a product.
     *
     * @param Promidata_Service_Request_GetProductPriceList $getProductPriceListRequest
     *
     * @return Promidata_Service_Response_GetProductPriceList
     */
    public function GetProductPriceList(Promidata_Service_Request_GetProductPriceList $getProductPriceListRequest);

    /**
     * @brief Returns information about a customer
     *
     * @param Promidata_Service_Request_GetCustomerInformation $getCustomerInformationRequest
     *
     * @return Promidata_Service_Response_GetCustomerInformation
     */
    public function GetCustomerInformation(Promidata_Service_Request_GetCustomerInformation $getCustomerInformationRequest);

    /**
     * @brief Returns a list of customer informations of customers which has changed since given datetime.
     *
     * @param Promidata_Service_Request_GetCustomerInformationList $getCustomerInformationListRequest
     * return Promidata_Service_Response_CustomerInformationList
     */
    public function GetCustomerInformationList(Promidata_Service_Request_GetCustomerInformationList $getCustomerInformationListRequest);

    /**
     * @brief Returns a list of user informations
     *
     * @param Promidata_Service_Request_GetUserInformation $getUserInformationRequest
     *
     * @return Promidata_Service_Response_GetUserInformation
     */
    public function GetUserInformation(Promidata_Service_Request_GetUserInformation $getUserInformationRequest);

    /**
     * @brief Returns a price information list for a Customer
     *
     * @param Promidata_Service_Request_GetCustomerPriceList $getCustomerPriceListRequest
     *
     * @return Promidata_Service_Response_GetProductPriceList
     */
    public function GetCustomerPriceList(Promidata_Service_Request_GetCustomerPriceList $getCustomerPriceListRequest);

    /**
     * @brief Returns a list of possible automatic conditions for the given constellation
     *
     * @param Promidata_Service_Request_GetPossibleAutomaticConditionList $getPossibleAutomaticConditionListRequest
     *
     * @return Promidata_Service_Response_GetPossibleAutomaticConditionList
     */
    public function GetPossibleAutomaticConditionList(Promidata_Service_Request_GetPossibleAutomaticConditionList $getPossibleAutomaticConditionListRequest);

    /**
     * @brief Returns a list of articlenumbers of products inside a specified product group
     *
     * @param Promidata_Service_Request_GetArticleNumberListByArticleGroup $getArticleNumberListByArticleGroupRequest
     *
     * @return Promidata_Service_Response_GetArticleNumberListByArticleGroup
     */
    public function GetArticleNumberListByArticleGroup(Promidata_Service_Request_GetArticleNumberListByArticleGroup $getArticleNumberListByArticleGroupRequest);

    /**
     * @param Promidata_Service_Request_SearchCustomer $parameters
     *
     * @return Promidata_Service_Response_SearchCustomer
     */
    public function SearchCustomer(Promidata_Service_Request_SearchCustomer $parameters);

    /**
     * @param Promidata_Service_Request_SearchSupplier $parameters
     *
     * @return Promidata_Service_Response_SearchSupplier
     */
    public function SearchSupplier(Promidata_Service_Request_SearchSupplier $parameters);

    /**
     * @param Promidata_Service_Request_SearchProduct $parameters
     *
     * @return Promidata_Service_Response_SearchProduct
     */
    public function SearchProduct(Promidata_Service_Request_SearchProduct $parameters);

    /**
     * @param Promidata_Service_Request_GetShowDescriptionList $parameters
     *
     * @return Promidata_Service_Response_GetShowDescriptionList
     */
    public function GetShowDescriptionList(Promidata_Service_Request_GetShowDescriptionList $parameters);

    /**
     * @param Promidata_Service_Request_GetCurrencyList $parameters
     *
     * @return Promidata_Service_Response_GetCurrencyList
     */
    public function GetCurrencyList(Promidata_Service_Request_GetCurrencyList $parameters);

    /**
     * @param Promidata_Service_Request_GetPaymentInformationList $parameters
     *
     * @return Promidata_Service_Response_GetPaymentInformationList
     */
    public function GetPaymentInformationList(Promidata_Service_Request_GetPaymentInformationList $parameters);

    /**
     * @param Promidata_Service_Request_GetDispatchTypeList $parameters
     *
     * @return Promidata_Service_Response_GetDispatchTypeList
     */
    public function GetDispatchTypeList(Promidata_Service_Request_GetDispatchTypeList $parameters);

    /**
     * @param Promidata_Service_Request_GetDeliveryTermList $parameters
     *
     * @return Promidata_Service_Response_GetDeliveryTermList
     */
    public function GetDeliveryTermList(Promidata_Service_Request_GetDeliveryTermList $parameters);

    /**
     * @param Promidata_Service_Request_GetCollectiveInvoiceList $parameters
     *
     * @return Promidata_Service_Response_GetCollectiveInvoiceList
     */
    public function GetCollectiveInvoiceList(Promidata_Service_Request_GetCollectiveInvoiceList $parameters);

    /**
     * @param Promidata_Service_Request_GetIndentInformation $parameters
     *
     * @return Promidata_Service_Response_GetIndentInformation
     */
    public function GetIndentInformation(Promidata_Service_Request_GetIndentInformation $parameters);

    /**
     * @param Promidata_Service_Request_GetProductConfiguration $parameters
     *
     * @return Promidata_Service_Response_GetProductConfiguration
     */
    public function GetProductConfiguration(Promidata_Service_Request_GetProductConfiguration $parameters);

    /**
     * @param Promidata_Service_Request_SearchPurchaseOrder $parameters
     *
     * @return Promidata_Service_Response_SearchPurchaseOrder
     */
    public function SearchPurchaseOrder(Promidata_Service_Request_SearchPurchaseOrder $parameters);

    /**
     * @param Promidata_Service_Request_GetPurchaseOrderInformation $parameters
     *
     * @return Promidata_Service_Response_GetPurchaseOrderInformation
     */
    public function GetPurchaseOrderInformation(Promidata_Service_Request_GetPurchaseOrderInformation $parameters);

    /**
     * @param Promidata_Service_Request_ChangePurchaseOrderAction $parameters
     *
     * @return Promidata_Service_Response_ChangePurchaseOrderAction
     */
    public function ChangePurchaseOrderAction(Promidata_Service_Request_ChangePurchaseOrderAction $parameters);

    /**
     * @param Promidata_Service_Request_GetPurchaseOrderActionList $parameters
     *
     * @return Promidata_Service_Response_GetPurchaseOrderActionList
     */
    public function GetPurchaseOrderActionList(Promidata_Service_Request_GetPurchaseOrderActionList $parameters);
}