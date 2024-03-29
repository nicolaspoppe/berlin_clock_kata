<?php
require 'BerlinClockKata.php';

use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    public function testSimpleMinutes(){
        $berlinClock = new BerlinClockKata(12,32,00);
        $actual = $berlinClock->getSimpleMinutes();
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

    public function testHoursBlocOf5(){
        $berlinClock = new BerlinClockKata(8,23,00);
        $actual = $berlinClock->getHoursBlocOf5();
        $this->assertEquals(['R','O','O','O'],$actual);
    }

    public function testSeconds(){
        $berlinClock = new BerlinClockKata(12,00,59);
        $actual = $berlinClock->getSeconds();
        $this->assertEquals(['O'],$actual);
    }
    public function testAllClock(){
        $berlinClock = new BerlinClockKata(16,50,06);
        $actual = $berlinClock->getAllClock();
        $this->assertEquals([['Y'],['R','R','R','O'],['R','O','O','O'],['Y','Y','R','Y','Y','R','Y','Y','R','Y','O'],['O','O','O','O']],$actual);
    }
}
