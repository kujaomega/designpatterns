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
    echo 'El nom de la classe es: '.$className.'<br>';
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
    echo 'Arxiu requerit: '.$fileName.'<br>';
    require $fileName;
}

