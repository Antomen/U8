<?php

//include 'index.html';
require 'ClassDice.php';
//
//$person = new ClassDice();
//
//$person->name = 'John';
//$person->age = 20;
//
//echo $person->sentence();


$dice = new Dice($_GET["antalSidor"]);

//$kast = $dice->kasta();

function printDice($varjeKast) {
    $kastLista = "<ol>";
    foreach ($varjeKast as $kast) {
        $kastLista .= "<li>" . $kast . "</li>";
    }
    return $kastLista;
}

if (isset($_GET["throwDice"])) {

    $antal = $_GET["antalDice"];
    $sidor = $_GET["antalSidor"];

    $kast = $dice->kasta($antal, $sidor);


    echo "Antal kast: " . $kast["antal"];
    echo "<br>";
    echo "Antal sidor: " . $kast["sidor"];
    echo "<br>";
    echo printDice($kast["tarning"]);
    echo "<br>";
    echo "Summa: " . $kast["summa"];
    echo "<br>";
}