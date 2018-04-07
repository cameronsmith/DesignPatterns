<?php namespace UKCASmith\DesignPatterns\Behavioral\Interpreter\Expressions;

use UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts\Expression;

class Meters extends Measurement implements Expression
{
    /**
     * Miles to Miles.
     *
     * @return int
     */
    protected function miles()
    {
        return 0.000621371;
    }

    /**
     * Miles to Kilometers.
     *
     * @return float
     */
    protected function kilometers()
    {
        return 0.001;
    }

    /**
     * Miles to Meters.
     *
     * @return float
     */
    protected function meters()
    {
        return 1;
    }

}