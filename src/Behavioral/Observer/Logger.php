<?php namespace UKCASmith\DesignPatterns\Behavioral\Observer;

/**
 * This is just a simple logger so we can test against the pattern. It isn't part of the pattern.
 *
 * @package UKCASmith\DesignPatterns\Behavioral\Observer
 */
class Logger
{
    static $logger = [];

    /**
     * Set logger.
     *
     * @param $logMessage
     */
    public static function setLogger($logMessage) {
        static::$logger[] = $logMessage;
    }

    public static function getLogger() {
        return static::$logger;
    }

    /**
     * Clear logger/
     */
    public static function clearLogger() {
        static::$logger = [];
    }

}