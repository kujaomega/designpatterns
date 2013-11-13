<?php
/**
 * file quack.php
 *
 * @author kujaomega
 */

/**
 * This is the quack of ducks.
 *
 * class Quack
 */
class Quack implements QuackBehavior
{
    /**
     * This is the quack function;
     */
    public function quacks()
    {
        echo( 'Quack');
    }
}