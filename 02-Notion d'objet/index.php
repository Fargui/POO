<?php

include  "Personnage.php";


/* utilisation de la classe Personnage pr creer un objet '$guillaume'*/

$guillaume = new Personnage("Guillaume");
$guillaume->name = "Guillaume";
$guillaume->age = 26;
$guillaume->vie = 100;
$guillaume->atk = 70;

echo 'Nom: '.$guillaume->name.'<br>' ; 
echo 'Age: '.$guillaume->age ;

echo "<br>";
echo "<br>";

$franck = new Personnage("Franck");
$franck->name = 'Franck';
$franck->age = 32;
$franck->vie = 100;

$guillaume->direBonjour($franck->name);

echo $guillaume->getName()." à mis la vie de ".$franck->name." à ".$guillaume->attaque($franck).'pv';

