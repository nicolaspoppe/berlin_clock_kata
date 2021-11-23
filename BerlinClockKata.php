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

    public function getMinutesBlocOf5(){
        $quotient = floor($this->minutes / 5);
        $tabMinutesBloc = ['O','O','O','O','O','O','O','O','O','O','O'];
        for($i=0;$i<$quotient;$i++){
            if(($i+1)%3 != 0) {
                $tabMinutesBloc[$i] = 'Y';
            }
            else{
                $tabMinutesBloc[$i] = 'R';
            }
        }
        return $tabMinutesBloc;
    }
}

?>
