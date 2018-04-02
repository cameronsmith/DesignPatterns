<?php namespace UKCASmith\DesignPatterns\Structural\Flyweight;

class FlyweightFactory
{
    /**
     * An array of drawer objects organised by color.
     *
     * @var array
     */
    protected static $colors = [];


    /**
     * Make an object only if one does not exist already.
     *
     * @param $color
     * @return mixed|Drawer
     */
    public static function make($color) {
        if (isset(static::$colors[$color])) {
            return static::$colors[$color];
        }

        $drawer = new Drawer($color);

        static::$colors[$color] = $drawer;

        return $drawer;
    }
}