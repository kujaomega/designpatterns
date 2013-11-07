
import java.util.ArrayList;

/**
 * File WeatherData.java
 * 
 * @author kujaomega
 */

/**
 * This is where we recive the data of the weather
 * 
 * class WeatherData
 */
public class WeatherData 
{
    /**
     * This is where we save the observers.
     * 
     * @var ArrayList observers
     */
    private ArrayList observers;
    
    /**
     * This is where we save the temperature.
     * 
     * @var float temperature
     */
    private float temperature;
    
    /**
     * This is where we save the humidity.
     * 
     * @var float humidity
     */
    private float humidity;
    
    /**
     * This is where we save the pressure.
     * 
     * @var float pressure
     */
    private float pressure;
    
    /**
     * This is the constructor of the class.
     */
    public WeatherData()
    {
        observers = new ArrayList();
    }
    
    /**
     * This is the function where we register the observer.
     * 
     * @param Observer observer This is the observer to register
     */
    public void registerObserver( Observer observer )
    {
        observers.add( observer );        
    }
    
    /**
     * This method remove the observer.
     * 
     * @param Observer observer
     */
    public void removeObserver( Observer observer )
    {
        int index = observers.indexOf( observer );
        if (index >= 0 )
        {
            observers.remove( index );
        }
    }
    
    /**
     * This is the method to update the observers.
     */
    public void notifyObservers()
    {
        for ( int index = 0; index < observers.size(); index++)
        {
            Observer observer = ( Observer ) observers.get( index );
            observer.update( temperature, humidity, pressure );
        }
    }
    
    /**
     * This method notify the observers.
     */
    public void measurementsChanged()
    {
        notifyObservers();
    }
    
    /**
     * This method sets the measurements.
     * 
     * @param float temperature This is the changed temperature
     * @param float humidity This is the changed humidity 
     * @param float preassure This is the changed preassure
     */
    public void setMeasurements( float temperature, float humidity, float pressure )
    {
        this.temperature = temperature;
        this.humidity = humidity;
        this.pressure = pressure;
        measurementsChanged();
    }
}
