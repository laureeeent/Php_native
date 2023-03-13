<?php

require_once "connexion_voitures.php";


$query = 'SELECT * FROM modeles ORDER BY marque';

$prep = $pdo->prepare($query);

$prep->execute();

$voitures = $prep->fetchAll();

foreach ($voitures as $voiture) {


    echo ' <br>id_modele = ' . $voiture['id_modele']
        . ' - marque = ' . $voiture['marque']
        . " - modèle = " . $voiture['modele']
        . "carburant ". $voiture["carburant"] . "<br>";
}