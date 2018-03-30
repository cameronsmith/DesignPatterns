<?php namespace UKCASmith\DesignPatterns\Structural\Composite;

use UKCASmith\DesignPatterns\Structural\Composite\Contracts\Composite;

class Data implements Composite
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function add(Composite $child)
    {
        return false;
    }

    public function remove(Composite $child)
    {
        return false;
    }

    public function get()
    {
        return $this->data;
    }
}