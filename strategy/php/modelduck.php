<?php
/**
 * file modelduck.php
 *
 * @author Kujaomega
 */

/**
 * This is a model duck.
 *
 * class ModelDuck
 */
class ModelDuck extends Duck
{
    /**
     * This is the construct method for model duck.
     */
    public function __construct()
    {
        $this->fly_behavior = new FlyNoWay();
        $this->quack_behavior = new Quack();
    }

    /**
     * This is the display method for model duck.
     */
    public function display()
    {
        echo ( 'I\'m a model duck');
    }
}