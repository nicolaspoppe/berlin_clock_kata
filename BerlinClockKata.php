<?php

class BerlinClockKata
{
    private $heures;
    private $minutes;
    private $secondes;
    private $horloge;

    public function __construct($heures, $minutes, $secondes){
        $this->heures = $heures;
        $this->minutes = $minutes;
        $this->secondes = $secondes;
        //$this->horloge = [['O'],['O','O','O','O'],['O','O','O','O'],['O','O','O','O','O','O','O','O','O','O','O'],['O','O','O','O']];

    }
    public function getMinutesSimples(){
        $reste = $this->minutes%5;
        $tabMinutesSimples = ['O','O','O','O'];
        for($i=0;$i<$reste;$i++){
            $tabMinutesSimples[$i]='Y';
        }
        return $tabMinutesSimples;
    }
}

?>
