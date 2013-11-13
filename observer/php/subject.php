<?php
/**
 * file subject.php
 *
 * @author kujaomega
 */

/**
 * This interface will be implemented by the observed objects.
 *
 * interface Subject
 */
interface Subject
{
    /**
     * This is the registerObserver method.
     *
     * @param Observer observer
     */
    public function registerObserver( ObserverElement $observer );

    /**
     * This method is the removeObservers.
     *
     * @param Observer observer
     */
    public function removeObserver( ObserverElement $observer );

    /**
     * This is the notifyObservers method.
     */
    public function notifyObservers();
}