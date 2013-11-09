<?php
/**
 * file miniducksimulator.php
 *
 * @author kujaomega
 */
include('autoload.php');

$mallard_duck = new MallardDuck();
echo '<br>';
$mallard_duck->performFly();
echo '<br>';
$mallard_duck->performQuack();
echo '<br>Model duck: <br>';
$duck_model = new ModelDuck();
$duck_model->performFly();
$duck_model->setFlyBehavior( new FlyRocketPowered() );
echo '<br>';
$duck_model->performFly();