<?php
/**
 * file currentconditionsdisplay.php
 *
 * @author kujaomega
 */

/**
 * This is a display element
 *
 * class CurrentConditionsDisplay
 */
class CurrentConditionsDisplay implements DisplayElement, ObserverElement
{
    /**
     * This is the temperature.
     *
     * @var float $temperature
     */
    private $temperature;

    /**
     * This is the humidity.
     *
     * @var float $humidity
     */
    private $humidity;

    /**
     * This is the weather Data object.
     *
     * @var Subject $weather_data
     */
    private $weather_data;

    /**
     * This is the constructor of CurrentConditionsDisplay
     *
     * @param Subject $weather_data This is the weather data
     */
    public function __construct( Subject $weather_data )
    {
        $this->weather_data = $weather_data;
        $observer = $this;
        $this->weather_data->registerObserver( $observer );
    }

    /**
     * This is the update method
     *
     * @param float $temperature This is the temperature
     * @param float $humidity This is the humidity
     * @param float $pressure This is the preassure
     */
    public function update( $temperature, $humidity, $pressure )
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    /**
     * The display method.
     */
    public function display()
    {
        echo ( '<br> The current Conditions: '.$this->temperature.' Degrees and '.$this->humidity.' % humidity.');
    }
}