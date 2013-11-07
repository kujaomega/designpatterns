/*
 * File FlyBehavior.java
 * 
 * @author kujaomega
 */

/**
 * This class will set the impossibility to fly.
 * 
 * Class FlyNoWay
 */
public class FlyNoWay implements FlyBehavior{
    
    /**
     * This is the fly method.
     */
    public void fly(){
        System.out.println("I can't fly");
    }
}
