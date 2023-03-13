<?php

require_once './connexion.php';

$libelle = "poire";
$prix = "6";

$query = "INSERT INTO ARTICLES (libelle, prix) VALUES (:libelle, :prix);";
$prep = $pdo->prepare($query);
$prep->bindValue(":libelle", $libelle);
$prep->bindValue(":prix", $prix);

$prep->execute();

