/**
 * File ModelDuck.java
 * 
 * @author kujaomega
 */

/**
 * This is the ModelDuck.
 * 
 * class ModelDuck
 */
public class ModelDuck extends Duck{
    public ModelDuck(){
        flyBehavior=new FlyNoWay();
        quackBehavior= new MuteQuack();
    }
    
    public void display(){
        System.out.print("I'm a model duck");
    }
}
