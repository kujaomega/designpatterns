<?php
/**
 * file weatherdata.php
 *
 * @author kujaomega
 */

/**
 * This will be the object to observe.
 *
 * class WeatherData
 */
class WeatherData implements Subject
{
    /**
     * This array will save all the observers.
     *
     * @var array $array_observers
     */
    private $array_observers = array();

    /**
     * This is the temperature.
     *
     * @var float $temperature
     */
    private $temperature;

    /**
     * This is the pressure.
     *
     * @var float $pressure
     */
    private $pressure;

    /**
     * This is the humidity.
     *
     * @var float $humidity
     */
    private $humidity;

    /**
     * This is the constructor
     */
    public function __construct()
    {

    }

    /**
     * This is the registerObserver method.
     *
     * @param Observer $observer This is the observer to add
     */
    public function registerObserver( ObserverElement $observer )
    {
        array_push( $this->array_observers, $observer );
    }

    /**
     * This method will remove an Observer.
     *
     * @param Observer $observer This is the observer to remove
     */
    public function removeObserver( ObserverElement $observer)
    {
        foreach ( $this->array_observers as $key => $value)
        {
            if ( $observer == $value)
            {
                unset ( $this->array_observers[$key]);
            }
        }
        $this->array_observers = array_values( $this->array_observers );

    }

    /**
     * This method will tell the observers the changes of state.
     */
    public function notifyObservers()
    {

        if ( isset ( $this->array_observers ) )
        {
            foreach ( $this->array_observers as $key => $value )
            {
                $observer = $this->array_observers[$key];
                $observer->update( $this->temperature, $this->humidity, $this->pressure );
            }
        }
    }

    /**
     * This method will notify the observers when we get updated measurements.
     */
    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    /**
     * With this method we set all the measurements.
     *
     * @param float $temperature This is the temperature to change
     * @param float $humidity This is the changes in humidity
     * @param float $pressure This is the preasure to change
     */
    public function setMeasurements( $temperature, $humidity, $pressure )
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}