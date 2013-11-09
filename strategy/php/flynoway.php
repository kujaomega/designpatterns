<?php
/**
 * File flynoway.php
 *
 * @author kujaomega
 */

/**
 * This is the flying behavior implementation for ducks that don't fly.
 */
class FlyNoWay implements FlyBehavior
{
    /**
     * This is the fly method.
     */
    public function fly()
    {
        echo( 'I can\'t fly!');
    }
}