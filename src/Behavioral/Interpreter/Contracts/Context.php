<?php
/**
 * Created by PhpStorm.
 * User: cameron
 * Date: 07/04/18
 * Time: 16:31
 */

namespace UKCASmith\DesignPatterns\Behavioral\Interpreter\Contracts;


interface Context
{
    public function getFrom();
    public function getTo();
}