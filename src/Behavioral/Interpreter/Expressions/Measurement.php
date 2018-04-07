<?php namespace UKCASmith\DesignPatterns\Behavioral\Interpreter\Expressions;

use UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts\Expression;

abstract class Measurement implements Expression
{
    /**
     * Call class from context.
     *
     * @param $context
     * @return mixed
     */
    public function solve($context)
    {
        $lowerCaseContext = (substr($context, -1) === 's') ? strtolower($context) : strtolower($context) . 's';

        return $this->{$lowerCaseContext}();
    }

    abstract protected function miles();
    abstract protected function kilometers();
    abstract protected function meters();
}