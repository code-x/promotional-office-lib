echo "PromotionalOffice PHP Webservice Generator"
echo "See README.md for additional information."

del /S /F CustomerImportService
d:\xampp\php\php wsdl2phpgenerator-2.5.5.phar -i http://promotionaloffice.cloudapp.net/PromotionalOffice/Services/UniversalImporter/CustomerImportService.svc?wsdl -o CustomerImportService
del /S /F ClientBackendService
d:\xampp\php\php wsdl2phpgenerator-2.5.5.phar -i https://promotionaloffice.cloudapp.net/PromotionalOffice/Services/Info/ClientBackendService.svc?wsdl -o ClientBackendService
del /S /F UniversalImporterDocumentationService
d:\xampp\php\php wsdl2phpgenerator-2.5.5.phar -i http://promotionaloffice.cloudapp.net/PromotionalOffice/Services/UniversalImporter/UniversalImporterDocumentationService.svc?wsdl -o UniversalImporterDocumentationService