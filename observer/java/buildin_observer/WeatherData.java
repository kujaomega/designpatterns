package observer.java.buildin_observer;
import java.util.ArrayList;
import java.util.Observable;

/**
 * File WeatherData.java
 * 
 * @author kujaomega
 */

/**
 * This is where we recive the data of the weather but now using observable utils.
 * 
 * class WeatherData
 */
public class WeatherData extends Observable
{
    /**
     * This is the getTemperature function.
     */
    public double getHumidity()
    {
        double humidity = 0.08;
        return humidity;
    }
    
    /**
     * This is the getHumidity function.
     * 
     * @return 
     */
    public double getTemperature()
    {
        double temperature = 0.03;
        return temperature;
    }
    
    /**
     * This is the getPressure method.
     * 
     * @return
     */
    public double getPressure()
    {
        double pressure = 0.03;
        return pressure;
    }
}
