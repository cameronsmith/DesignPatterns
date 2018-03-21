<?php namespace UKCASmith\DesignPatterns\Behavioral\NullObject\Contracts;

interface PlayerMovement
{
    public function right();
    public function left();
    public function top();
    public function bottom();
}