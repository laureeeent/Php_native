<?php

require_once "Ville.php";
require_once "Ville_.php";
require_once "VilleAvecRegion.php";

echo "<br>Exercice 1 : <br><br>";

$Nantes = new Ville();
$Nantes->setNom("Nantes");
$Nantes->setDepartement(44);
$Nantes->affichage();

echo "<br>Exercice 2 : <br><br>";

$Paris = new Ville_("Paris", "75");
$Paris->affichage();

echo "<br>Exercice 3 : <br><br>";


$Montpellier = new VilleAvecRegion("Montpellier", 34, "Occitanie");
$Montpellier->affichage();
$Pau = new Ville_("Pau", 64);
$Pau->affichage();
echo Ville_::getVilleNomLePlusLong().'<br>';
$ville2 = new Ville_("Saint-Etienne-de-Montluc", "44");
$ville2->affichage();
echo Ville_::getVilleNomLePlusLong()."<br>";


echo "<br>Exercice 4 : <br><br>";




