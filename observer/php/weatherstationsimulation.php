<?php
/**
 * file weatherstationsimulation.php
 *
 * @author kujaomega
 */
require_once( 'autoload.php' );

$weather_data = new WeatherData();

$display = new CurrentConditionsDisplay( $weather_data );
echo 'Hola!';
$weather_data->setMeasurements( 20.03, 30.5, 23.4 );
echo '<br>';
$weather_data->setMeasurements( 21.03, 70.5, 25.4 );
