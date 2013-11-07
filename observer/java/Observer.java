/*
 * File Observer.java
 * 
 * @author kujaomega
 */

/**
 * This is the observer interface.
 * 
 * Inteface Observer
 */
public interface Observer 
{
    /**
     * this is the update method, we update the observers
     * 
     * @param float temp This is the temperature
     * @param float humidity This is the humidity
     * @param float pressure This is the pressure
     * 
     */
    public void update( float temperature, float humidity, float pressure );
}
