/*
 * File MallardDuck.java
 * 
 * @author kujaomega
 */

/**
 * This class will be a mallard duck.
 * 
 * class MallardDuck
 */
public class MallardDuck extends Duck{
    
    /**
     * This is the constructor of the mallard duck class.
     */
    public MallardDuck(){
        quackBehavior = new Quack();
        flyBehavior=new FlyWithWings();
        
    }
    
    /**
     * This is the display method of the mallard duck.
     */
    public void display(){
        System.out.println("I'm a real Mallard Duck");
    }
}
