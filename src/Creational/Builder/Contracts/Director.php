<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 27/03/18
 * Time: 21:34
 */

namespace UKCASmith\DesignPatterns\Creational\Builder\Contracts;


interface Director
{
    public function build(Builder $builder);
}