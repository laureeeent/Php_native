<?php


require_once "./connexion.php";

$prix=80;

$query = 'SELECT * FROM Articles WHERE prix < :prix';

$prep = $pdo->prepare($query);
$prep->bindValue(':prix',$prix);

$prep->execute();

$arr = $prep->fetchAll();

foreach ($arr as $article) {


    echo ' <br>id = ' . $article['identifiant']
        . ' - libelle = ' . $article['libelle']
        . " - prix = " . $article['prix'] . "<br>";
}