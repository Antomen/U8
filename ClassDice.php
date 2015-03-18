<?php

class Dice {

    protected $antal;
    protected $sidor;

    public function __construct($sidor = 6) {
        $this->sidor = $sidor;
    }

    public function kasta($antal = 1) {
        $kast = array();

        for ($i = 0; $i < $antal; $i++) {
            $tmpKast = rand(1, $this->sidor);
            $kast["tarning"][ ] = $tmpKast;
        }
        $kast["summa"] = array_sum($kast["tarning"]);
        $kast["sidor"] = $this->sidor;
        $kast["antal"] = $antal;
        return $kast;
    }

}
