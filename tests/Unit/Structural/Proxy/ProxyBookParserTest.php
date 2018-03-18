<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Structural\Proxy\BookParser;

class ProxyBookParserTest extends TestCase
{
    public function testWeCanUseProxyClassToInterfaceWithBookParser()
    {
        $proxyParser = new BookParser([
            'author' => 'Cameron Smith',
            'title' => 'Design Patterns',
            'words' => 'this would be a lot of content and would take a long time to count!'
        ]);

        $this->assertTrue($proxyParser->getBookAuthor() == 'Cameron Smith');
        $this->assertTrue($proxyParser->getBookTitle() == 'Design Patterns');
        $this->assertTrue($proxyParser->getTotalWords() == 15);
    }
}