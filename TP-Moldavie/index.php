<?php
include 'CountryCapital.php';



$europa = new CountryCapital("europa.json");


echo $europa->getCapitalByCountry("France")."<br>";

echo $europa->getCountryByCapital("Paris")."<br>";

$europa->getCapitals();
