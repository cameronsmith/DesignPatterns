<?php namespace UKCASmith\DesignPatterns\Behavioral\Observer;

use UKCASmith\DesignPatterns\Behavioral\Observer\Contracts\Subject;
use UKCASmith\DesignPatterns\Behavioral\Observer\Traits\SubjectTrait;

class Login implements Subject
{
    use SubjectTrait;

    /**
     * Login user and notify if anything is listening
     */
    public function auth() {
        $this->notify();
    }
}