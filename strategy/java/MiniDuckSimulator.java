/**
 * File MiniDuckSimulator.java
 * 
 * @author kujaomega
 */

/**
 * This is the MiniDuckSimulator that will run the main of the program.
 * 
 * class MiniDuckSimulator
 */
public class MiniDuckSimulator {
    
    /**
     * This is our main.
     * 
     * @param args 
     */
    public static void main (String [] args){
        Duck mallard=new MallardDuck();
        mallard.performQuack();
        mallard.performFly();
        Duck model=new ModelDuck();
        model.performFly();
        model.setFlyBehavior(new FlyRocketPowered());
        model.performFly();
    }
}
