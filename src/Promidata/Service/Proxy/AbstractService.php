<?php

/**
 * Proxy for Promidata PromotionalOffice.
 *
 * @author      Matthias Kleine <matthias@code-x.de>
 * @package     Promidata_Service
 * @copyright   Copyright (c) 2017 code-x GmbH
 */
abstract class Promidata_Service_Proxy_AbstractService extends SoapClient
{
    protected $version = '2.12';

    /**
     * Get the compatible webservice version number.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function __soapCall($function_name, $arguments, $options = null, $input_headers = null, &$output_headers = null)
    {
        try {
            return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
        } catch (SoapFault $e) {
            // Custom error handling
            $output = array();

            if (preg_match('/MyArticleNumber not found: (.*)/', $e->getMessage(), $output) && count($output)) {
                throw new Promidata_Service_Exception_Articlenotfound('Article not found: ' . $output[1], $e->getCode(), $e);
            }

            if (preg_match('/DataPortal.Fetch fehlgeschlagen \(User ([a-zA-Z1-9-_ ]{1,}) does not exist.\)/', $e->getMessage(), $output) && count($output)) {
                throw new Promidata_Service_Exception_Authentication('Authentication failed: User not found', $e->getCode(), $e);
            }

            switch ($e->getMessage()) {
                case 'ImportSourceNotFound':
                    throw new Promidata_Service_Exception_Importsourcenotfound('Import source not found', $e->getCode(), $e);
                    break;

                case 'ArticleWithNumberNotFound':
                    throw new Promidata_Service_Exception_Articlenotfound('Article not found', $e->getCode(), $e);
                    break;

                case 'ArticleGroupNotFound':
                    throw new Promidata_Service_Exception_Articlegroupnotfound('Article group not found', $e->getCode(), $e);;
                    break;

                case 'DataPortal.Fetch fehlgeschlagen (Login_Company_0_not_found)':
                case 'DataPortal.Fetch fehlgeschlagen (Invalid credentials)':
                    throw new Promidata_Service_Exception_Authentication('Authentication failed', $e->getCode(), $e);
                    break;

                case 'CustomerNotFound':
                    throw new Promidata_Service_Exception_Customernotfound('Customer not found', $e->getCode(), $e);
                    break;

                default:
                    throw new Promidata_Service_Exception_Unknown($e->getMessage(), $e->getCode(), $e);
                    break;
            }
        }
    }
}