<?php
/**
 * squeak.php
 *
 * @author kujaomega
 */

/**
 * This class is for small ducks that don't quack.
 *
 * class Squeak
 */
class Squeak implements QuackBehavior
{
    /**
     * This is the quack method
     */
    public function quacks()
    {
        echo( 'Squeak' );
    }
}