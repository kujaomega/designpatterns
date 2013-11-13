/*
 * File subject.java
 * 
 * @author kujaomega
 */

/**
 * 
 * Interface subject
 */
public interface Subject 
{
    /**
     * This is the registerobserver.
     */
    public void registerObserver( Observer observer );
    
    /**
     * This is the removeobserver.
     */
    public void removeObserver( Observer observer);
    
    /**
     * With this method we notify the observers.
     */
    public void notifyObservers();
}
