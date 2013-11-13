/**
 * File CurrentConditionsDisplay.java
 * 
 * @author kujaomega
 */

/**
 * This is a displayer of the conditions.
 * 
 * Class CurrentConditionsDisplay
 */
public class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /**
     * This is the temperature.
     * 
     * @var float temperature
     */
    private float temperature;
    
    /**
     * This is the humidity.
     * 
     * @var float humidity
     */
    private float humidity;
    
    /**
     * This is the weatherData.
     * 
     * @var Subject weatherData
     */
    private Subject weatherData;
    
    /**
     * This is the constructor of the CurrentConditionsDisplay
     * 
     * @param 
     * 
     */
            
    /**
     * This method update the displays.
     * 
     * @param float temperature
     * @param float humidity
     * @param float pressure 
     */
    public void update( float temperature, float humidity, float pressure )
    {
        this.temperature = temperature;
        update(temperature, humidity, pressure);
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void display() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
