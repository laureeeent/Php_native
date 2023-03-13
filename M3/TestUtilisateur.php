<?php

require_once "Utilisateur.php";
require_once "UtilisateurAvecCouleur.php";
require_once "UtilisateurAvecMatricule.php";

$jean = new \M3\Utilisateur("Dupont", "jean");
echo $jean->informations();

$louis = new \M3\UtilisateurAvecCouleur("XVI", "Louis", "jaune");
echo $louis->informations();

$taulard1 = new \M3\UtilisateurAvecMatricule("Jean", "Gabin");
$taulard2 = new \M3\UtilisateurAvecMatricule("De Faria Rodrigues", "Valentin");
$taulard3 = new \M3\UtilisateurAvecMatricule("Le Goanvec", "Arthur");
$taulard4 = new \M3\UtilisateurAvecMatricule("Ollivier", "Guillaume");

$taulards = [$taulard1, $taulard2, $taulard3, $taulard4];
foreach ($taulards as$taulard) {
    echo $taulard->informations();
}
?>