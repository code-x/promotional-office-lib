<?php
/**
 * PromotionalOffice Service - Autoloader used for non-Zend environments.
 */
function psr0_autoloader($className)
{
    $className = ltrim($className, '\\');
    $fileName = dirname(__FILE__) . DIRECTORY_SEPARATOR;

    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require_once $fileName;
}

spl_autoload_register('psr0_autoloader');