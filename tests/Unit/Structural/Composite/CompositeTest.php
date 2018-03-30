<?php

use PHPUnit\Framework\TestCase;
use UKCASmith\DesignPatterns\Structural\Composite\Data;
use UKCASmith\DesignPatterns\Structural\Composite\Collection;

class CompositeTest extends TestCase
{
    public function testCompositeAndLeafWorkTheSame() {
        $collection = new Collection;

        $data1 = new Data('hello');
        $data2 = new Data('world');
        $data3 = new Data('cameron');

        $collection->add($data1);
        $collection->add($data2);
        $collection->add($data3);
        $collection->remove($data3);

        $testText = '';
        $collectionResult = $collection->get();
        foreach($collectionResult as $data) {
            $testText .= $data;
        }

        $this->assertTrue($testText === 'helloworld');
        $this->assertTrue($data3->get() === 'cameron');
    }
}