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
    public function registerObserver( Observer $observer );

    /**
     * This method is the removeObservers.
     *
     * @param Observer observer
     */
    public function removeObserver( Observer $observer );

    /**
     * This is the notifyObservers method.
     */
    public function notifyObservers();
}