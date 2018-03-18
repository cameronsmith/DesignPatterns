<?php namespace UKCASmith\DesignPatterns\Structural\Proxy\Contracts;

interface Parser
{
    public function getBookAuthor();
    public function getBookTitle();
    public function getTotalWords();
}