<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Structural\Adapter\Documents\Book;
use UKCASmith\DesignPatterns\Structural\Adapter\Person;
use UKCASmith\DesignPatterns\Structural\Adapter\eReaderAdapter;
use UKCASmith\DesignPatterns\Structural\Adapter\Other\Kindle;

class PersonTest extends TestCase
{
    public function testCanOpenADocument() {
        $document = new Book;
        $person = new Person($document);

        $this->assertTrue($person->openDocument() == 'open book');
        $this->assertTrue($person->turnPage() == 'turn page');
    }

    public function testCanOpenAdapter() {
        $document = new eReaderAdapter(new Kindle);
        $person = new Person($document);

        $this->assertTrue($person->openDocument() == 'turn on');
        $this->assertTrue($person->turnPage() == 'pressed next button');
    }
}