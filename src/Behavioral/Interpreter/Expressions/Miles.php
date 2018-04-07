<?php namespace UKCASmith\DesignPatterns\Behavioral\Interpreter\Expressions;

use UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts\Expression;

class Miles extends Measurement implements Expression
{
    /**
     * Miles to Miles.
     *
     * @return int
     */
    protected function miles()
    {
        return 1;
    }

    /**
     * Miles to Kilometers.
     *
     * @return float
     */
    protected function kilometers()
    {
        return 1.60934;
    }

    /**
     * Miles to Meters.
     *
     * @return float
     */
    protected function meters()
    {
        return 1609.34;
    }

}