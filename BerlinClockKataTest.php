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

    public function testMinutesBlocOf5(){
        $berlinClock = new BerlinClockKata(23,59,00);
        $actual = $berlinClock->getMinutesBlocOf5();
        $this->assertEquals(['Y','Y','R','Y','Y','R','Y','Y','R','Y','Y'],$actual);
    }

    public function testSimpleHours(){
        $berlinClock = new BerlinClockKata(23,59,59);
        $actual = $berlinClock->getSimpleHours();
        $this->assertEquals(['R','R','R','O'],$actual);
    }
}
