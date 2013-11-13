<?php
/**
 * File duck.php
 *
 * @author kujaomega
 */

/**
 * This is the mother class.
 *
 * class Duck
 */
abstract class Duck
{
    /**
     * In this variable we save the flybehavior.
     *
     * @var flyBehavior $fly_behavior
     */
    public $fly_behavior;

    /**
     * In this variable we save the quackbehavior.
     *
     * @var quackbehavior $quack_behavior.
     */
    public $quack_behavior;

    /**
     * This is the construct of the class
     */
    public function __construct()
    {

    }

    /**
     * This is the class to display the ducks.
     */
    public abstract function display();

    /**
     * This class perform the quack.
     */
    public function performQuack()
    {
        $this->quack_behavior->quacks();
    }

    /**
     * This class perform the fly.
     */
    public function performFly()
    {
        $this->fly_behavior->fly();
    }

    /**
     * This class perform the swim.
     */
    public function swim()
    {
        echo( 'All ducks can swim' );
    }

    /**
     * With this method we can change any time we want the fly behavior.
     *
     * @param FlyBehavior $flybehavior This is the flybehavior to change for
     */
    public function setFlyBehavior( FlyBehavior $fly_behavior )
    {
        $this->fly_behavior = $fly_behavior;
    }

    /**
     * With this method we change the quack behavior.
     *
     * @param QuackBehavior $quack_behavior This is the quackbehavior to change
     */
    public function setQuackBehavior( QuackBehavior $quack_behavior )
    {
        $this->quack_behavior = $quack_behavior;
    }

}