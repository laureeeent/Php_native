<?php

$articles = [["libelle"=>"champi", "prix"=>70], ["libelle"=>"pêche", "prix"=>15]];

require_once "connexion.php";

$query = "INSERT INTO ARTICLES (libelle, prix) VALUES (:libelle, :prix);";
$prep = $pdo->prepare($query);


$prep->bindParam(":libelle", $libelle);
$prep->bindParam(":prix", $prix);

foreach ($articles as $article) {
    $libelle = $article['libelle'];
    $prix = $article['prix'];

    $prep->execute();
}


?>
