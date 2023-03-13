<?php

try {

    $dsn = "mysql:host=localhost;dbname=legumes";

    $options = [PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"];

    $pdo = new PDO($dsn, 'userCodePHP', "Laurentpass--14", $options);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion succès";
} catch (POOException $e) {
    echo 'Erreur de connexion à la BDD : '.$e->getMessage();
}
