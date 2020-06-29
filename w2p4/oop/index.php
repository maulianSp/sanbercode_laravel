<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo $sheep->get_legs(); // 2
echo $sheep->get_cold_blooded(); // false

echo "<br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->name;
echo $sungokong->get_legs();
echo $sungokong->get_cold_blooded();
$sungokong->yell(); // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
echo $kodok->name;
echo $kodok->get_legs();
echo $kodok->get_cold_blooded();
$kodok->jump(); // "hop hop"

echo "halo";
?>