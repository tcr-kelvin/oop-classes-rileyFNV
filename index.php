<?php


class auto{
    public $deuren;
    public $kenteken;

    public function __construct($deuren, $kenteken){
        $this->deuren = $deuren;
        $this->kenteken = $kenteken;
    }
}

$hurgusburgus = new auto(5,"ASD-444-FNORD");

var_dump($hurgusburgus);
