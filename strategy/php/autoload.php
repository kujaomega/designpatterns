<?php
/**
 * File autoload.php
 *
 * @author kujaomega
 * @link http://www.php-fig.org/psr/psr-0/
 */

/**
 * This is the autoload function.
 *
 * @param $className
 */

function __autoload( $className )
{
    $className = ltrim( $className, '\\' );
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos( $className, '\\' ) )
    {
        $namespace = substr( $className, 0, $lastNsPos );
        $className = substr( $className, $lastNsPos + 1 );
        $fileName  = str_replace( '\\', DIRECTORY_SEPARATOR, $namespace ) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace( '_', DIRECTORY_SEPARATOR, $className ) . '.php';
    $fileName = strtolower( $fileName );
    require $fileName;
}

