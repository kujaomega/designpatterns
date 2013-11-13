<?php
/**
 * File mallardduck.php
 *
 * @author kujaomega
 */

/**
 * This is the class for mallardDuck
 *
 * class MallardDuck
 */
class MallardDuck extends Duck
{
    /**
     * This is the constructor
     */
    public function __construct()
    {
        $this->quack_behavior = new Quack();
        $this->fly_behavior = new FlyWithWings();
    }

    /**
     * This is the display method.
     */
    public function display()
    {
        echo( 'I\'m a real Mallard Duck' );
    }
}