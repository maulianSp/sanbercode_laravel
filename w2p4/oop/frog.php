<?php
require_once('animal.php');

class Frog extends Animal{
    public $lompat = "Hop hop";

    public function __construct($name){
        $this->name = '<u><b>'.$name."</b></u><br>";
        $this->cold_blooded = true;
        $this->legs = 4;
    }

    public function jump(){
        echo "Suara Lompat : <b>".$this->lompat."</b></br>";
    }

}
?>