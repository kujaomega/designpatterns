/**
 * file MuteQuack.java
 * 
 * @author kujaomega
 */

/**
 * This is the mutequack class that the quack is muted.
 * 
 * class MuteQuack
 */
public class MuteQuack implements QuackBehavior{
    public void quack(){
        System.out.println("<<Silence>>");
    }
}
