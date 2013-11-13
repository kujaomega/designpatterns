<?php
/**
 * File flywithwings.php
 *
 * @author kujaomega
 */

/**
 * This is the implementation for ducks that fly.
 *
 * class FlyWithWings
 */
class FlyWithWings implements FlyBehavior
{
    /**
     * This is the method to fly.
     */
    public function fly()
    {
        echo ( 'I\'m flying!' );
    }
}