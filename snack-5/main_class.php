<!-- Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze. -->


<?php


include_once __DIR__."../sub-classes/cappello.php";
include_once __DIR__."../sub-classes/scarpa.php";

class Indumento{
    public $materiale;

    parent::public function __construct(String $taglia_scarpe,String $taglia_cappello) {
        $this->taglia_scarpe = $taglia_scarpe;
        $this->taglia_cappello = $taglia_cappello;
    }
    var_dump($materiale);
}