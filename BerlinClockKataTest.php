<?php
require 'BerlinClockKata.php';

use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    public function testMinutesSimples(){
        $berlinClock = new BerlinClockKata(12,32,00);
        $actual = $berlinClock->getMinutesSimples();
        $this->assertEquals(['Y','Y','O','O'],$actual);
    }
}
