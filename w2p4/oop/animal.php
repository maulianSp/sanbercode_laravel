<?php
class Animal{
    public $legs = 2;
    public $cold_blooded = false;
    public $name;

    public function __construct($name){
        $this->name = '<u><b>'.$name."</b></u><br>";
    }

    public function get_legs(){
        return 'Jumlah Kaki : <b>'.$this->legs."</b><br>";
    }

    public function get_cold_blooded(){
        return 'Berdarah dingin : <b>'.json_encode($this->cold_blooded)."</b><br>";
    }
}
?>