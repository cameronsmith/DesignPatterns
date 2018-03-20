<?php namespace UKCASmith\DesignPatterns\Creational\Singleton;

class Database
{
    static $instance = false;

    /**
     * Database constructor.
     *
     * Cannot call from outside of class.
     */
    private function __construct()
    {

    }

    /**
     * Get current instance or make new instance and save.
     *
     * @return bool|static
     */
    public static function getInstance()
    {
        if (self::$instance) {
            return static::$instance;
        }

        static::$instance = new static();
        return static::$instance;
    }
}