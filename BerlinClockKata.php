<?php

class BerlinClockKata
{
    private $heures;
    private $minutes;
    private $secondes;

    public function __construct($heures, $minutes, $secondes){
        $this->heures = $heures;
        $this->minutes = $minutes;
        $this->secondes = $secondes;
        $this->createClock();
    }
    private function createClock(){

    }
}

?>
