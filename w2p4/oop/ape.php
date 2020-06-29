<?php
    class Ape extends Animal{
        public $suara = "Auoo";
        
        public function yell(){
            echo "Suara : <b>".$this->suara."</b><br>";
        }
    }

?>