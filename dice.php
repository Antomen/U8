<?php

include 'index.html';
require 'ClassDice.php';
//
//$person = new ClassDice();
//
//$person->name = 'John';
//$person->age = 20;
//
//echo $person->sentence();


$dice = new Dice();

if (isset($_GET["throwDice"])) {


    var_dump($_GET["throwDice"]);
    echo "<br>";
    var_dump($_GET["antalDice"]);
    echo "<br>";

    $antal = $_GET["antalDice"];
    echo $antal;
    
    echo "<br>";

     var_dump($dice->kasta($antal));
}