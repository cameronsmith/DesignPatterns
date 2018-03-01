<?php namespace UKCASmith\DesignPatterns\Behavioral\ChainOfResponsibility;

class MyHomeStatus
{
    protected $lightStatus = false;
    protected $lockStatus = false;
    protected $alarmStatus = false;

    /**
     * Turn alarm on.
     *
     * @return $this
     */
    public function alarmOn() {
        $this->alarmStatus = true;
        return $this;
    }

    /**
     * Turn alarm off.
     *
     * @return $this
     */
    public function alarmOff() {
        $this->alarmStatus = false;
        return $this;
    }

    /**
     * Lock doors.
     *
     * @return $this
     */
    public function lock() {
        $this->lockStatus = true;
        return $this;
    }

    /**
     * Unlock doors.
     *
     * @return $this
     */
    public function unlock() {
        $this->lockStatus = false;
        return $this;
    }


    /**
     * Turn lights on.
     *
     * @return $this
     */
    public function lightsOn() {
        $this->lightStatus = true;
        return $this;
    }

    /**
     * Turn lights off.
     *
     * @return $this
     */
    public function lightsOff() {
        $this->lightStatus = false;
        return $this;
    }

    /**
     * Get the status of the lights.
     *
     * @return bool
     */
    public function getLightsStatus() {
        return $this->lightStatus;
    }

    /**
     * Get the status of the locks.
     *
     * @return bool
     */
    public function getLockStatus() {
        return $this->lockStatus;
    }

    /**
     * Get the status of the alarm.
     *
     * @return bool
     */
    public function getAlarmStatus() {
        return $this->alarmStatus;
    }
}