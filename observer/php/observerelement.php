<?php
/**
 * file observer.php
 *
 * @author Kujaomega
 */

/**
 * This is the interface all the observers will implement.
 *
 * interface Observer
 */
interface ObserverElement
{
    /**
     * This method will update the observers data.
     */
    public function update( $temperature, $humidity, $pressure );
}