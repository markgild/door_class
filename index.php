<?php
    include_once 'deur.php';

    $voordeur = new Deur("Voordeur");
    echo $voordeur->sleutelGebruiken("links") . "\n";
    echo $voordeur->sleutelGebruiken("rechts") . "\n";
    echo $voordeur->deurOpenen() . "\n";
    echo $voordeur->doorDeurLopen() . "\n";
    echo $voordeur->sleutelGebruiken("links") . "\n";
    echo $voordeur->deurOpenen() . "\n";
    echo $voordeur->doorDeurLopen() . "\n";

?>