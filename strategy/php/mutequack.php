<?php
/**
 * file mutequack.php
 *
 * @author kujaomega
 */

/**
 * This class is for the ducks that don't quack.
 *
 * Class MuteQuack
 */
class MuteQuack implements QuackBehavior
{
    /**
     * This is the quack method
     */
    public function quacks()
    {
        echo( ' <<Silence>> ');
    }
}