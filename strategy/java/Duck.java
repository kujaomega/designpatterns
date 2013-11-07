/**
 * File Duck.java
 * 
 * @author kujaomega
 */

/**
 * This class will be the mother class for all ducks.
 * 
 * Class Duck
 */
public abstract class Duck {
    FlyBehavior flyBehavior;
    QuackBehavior quackBehavior;
    
    /**
     * This is the construct method for Duck.
     */
    public Duck(){
    }
    
    /**
     * This method will display the duck.
     */
    public abstract void display();
    
    /**
     * This method will make the duck fly.
     */
    public void performFly(){
        flyBehavior.fly();
    }
    
    /**
     * With this method, the duck will make the quack.
     */
    public void performQuack() {
        quackBehavior.quack();
    }
    
    /**
     * With this method, the duck will swim.
     */
    public void swim(){
        System.out.println("All ducks float, even decoys");
    }
    
    /**
     * This method will set the flybehavior.
     * 
     * @param FlyBehavior fb 
     */
    public void setFlyBehavior(FlyBehavior fb){
        flyBehavior=fb;
    }
    
    /**
     * This method will set the quack behavior.
     * 
     * @param qb 
     */
    public void setQuackBehavior(QuackBehavior qb){
        quackBehavior=qb;
    }
    
}
