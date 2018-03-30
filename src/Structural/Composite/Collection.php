<?php namespace UKCASmith\DesignPatterns\Structural\Composite;

use UKCASmith\DesignPatterns\Structural\Composite\Contracts\Composite;

class Collection implements Composite
{
    protected $data = [];

    public function add(Composite $child)
    {
        $this->data[spl_object_hash($child)] = $child;
    }

    public function remove(Composite $child)
    {
        unset($this->data[spl_object_hash($child)]);
    }

    public function get()
    {
        foreach($this->data as $data) {
            yield $data->get();
        }
    }
}