<?php

class BerlinClockKata
{
    private $hours;
    private $minutes;
    private $seconds;

    public function __construct($hours, $minutes, $seconds){
        $this->hours = $hours;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
    }
    public function getSimpleMinutes(){
        $rest = $this->minutes%5;
        $tabMinutesSimples = ['O','O','O','O'];
        for($i=0;$i<$rest;$i++){
            $tabMinutesSimples[$i]='Y';
        }
        return $tabMinutesSimples;
    }

    public function getMinutesBlocOf5(){
        $q = floor($this->minutes / 5);
        $tabMinutesBloc = ['O','O','O','O','O','O','O','O','O','O','O'];
        for($i=0;$i<$q;$i++){
            if(($i+1)%3 != 0) {
                $tabMinutesBloc[$i] = 'Y';
            }
            else{
                $tabMinutesBloc[$i] = 'R';
            }
        }
        return $tabMinutesBloc;
    }

    public function getSimpleHours()
    {
        $rest = $this->hours%5;
        $tabSimpleHours = ['O','O','O','O'];
        for($i=0;$i<$rest;$i++){
            $tabSimpleHours[$i]='R';
        }
        return $tabSimpleHours;
    }

    public function getHoursBlocOf5(){
        $q = floor($this->hours / 5);
        $tabHoursBloc = ['O','O','O','O'];
        for($i=0;$i<$q;$i++){
            $tabHoursBloc[$i] = 'R';
        }
        return $tabHoursBloc;
    }
    public function getSeconds(){
        return $this->seconds % 2 == 0 ? ['Y'] : ['O'];
    }
    public function getAllClock(){
        $allClock = [];
        $allClock[0] = $this->getSeconds();
        $allClock[1] = $this->getHoursBlocOf5();
        $allClock[2] = $this->getSimpleHours();
        $allClock[3] = $this->getMinutesBlocOf5();
        $allClock[4] = $this->getSimpleMinutes();
        return $allClock;
    }

}

?>
