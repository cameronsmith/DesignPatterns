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
    public function solve(array $context)
    {
        $content = array_shift($context);
        $lowerCaseContext = (substr($content, -1) === 's') ? strtolower($content) : strtolower($content) . 's';

        return $this->{$lowerCaseContext}();
    }

    abstract protected function miles();
    abstract protected function kilometers();
    abstract protected function meters();
}