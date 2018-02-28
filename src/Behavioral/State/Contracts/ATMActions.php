<?php namespace UKCASmith\DesignPatterns\Behavioral\State\Contracts;

interface ATMActions
{
    public function insertCard();
    public function ejectCard();
    public function insertPin($pinEntered);
    public function requestCash($cashToWithdraw);
}