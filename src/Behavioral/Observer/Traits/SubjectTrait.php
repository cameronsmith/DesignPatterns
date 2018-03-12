<?php namespace UKCASmith\DesignPatterns\Behavioral\Observer\Traits;

use UKCASmith\DesignPatterns\Behavioral\Observer\Contracts\Observer;

trait SubjectTrait
{
    protected $observers = [];

    /**
     * Attach an observer.
     *
     * @param Observer $observer
     * @return $this
     */
    public function attach(Observer $observer) {
        $this->observers[get_class($observer)] = $observer;

        return $this;
    }

    /**
     * Detach an observer.
     *
     * @param Observer $observer
     * @return $this
     */
    public function detach(Observer $observer) {
        unset($this->observers[get_class($observer)]);

        return $this;
    }

    /**
     * Notify all observers.
     *
     * @return $this
     */
    public function notify() {
        foreach($this->observers as $observer) {
            $observer->handle();
        }

        return $this;
    }
}