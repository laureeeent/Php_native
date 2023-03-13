<?php

require_once "connexion_voitures.php";

$identifiant = "";
$marque = "";
$modele = "";
$carburant = "";

if (isset($_POST["btnInserer"])) {
    $identifiant = "";
    $marque = "";
    $modele = "";
    $carburant = "";

    $messageErreur[] = "";
    $erreur = false;

    $identifiant = htmlspecialchars(trim($_POST['identifiant']));
    if(!$identifiant) {
        $messageErreur["identifiant"] = "L'identifiant ne peut pas être vide.";
        $erreur = true;
    }

    $marque = htmlspecialchars(trim($_POST['marque']));
    if(!$marque) {
        $messageErreur["marque"] = "La marque doit être renseignée.";
        $erreur = true;
    }

    $modele = htmlspecialchars(trim($_POST['modele']));
    if(!$modele) {
        $messageErreur["modele"] = "Le modèle ne peut pas être vide.";
        $erreur = true;
    }

    $carburant = htmlspecialchars(trim($_POST['carburant']));
    if(!$carburant) {
        $messageErreur["carburant"] = " Vous devez choisir un type de carburant.";
        $erreur = true;
    }



    if (!$erreur) {
        $query = "INSERT INTO modeles (id_modele, marque, modele, carburant)
VALUES (:id_modele, :marque, :modele, :carburant);";

        $prep = $pdo->prepare($query);


        $prep->bindParam(":id_modele", $identifiant);
        $prep->bindParam(":marque", $marque);
        $prep->bindParam(":modele", $modele);
        $prep->bindParam(":carburant", $carburant);

        $prep->execute();
    }
    else {
        foreach ($messageErreur as $erreurMsg) {
            echo "<p>".$erreurMsg."</p>";
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action = "insererVoiture.php" method="post">
        <fieldset>
            <legend>Ajouter un nouveau modèle</legend>

            <label>Identifiant : </label>
            <input type="text" name="identifiant"><br>

            <label>Marque : </label>
            <input type="text" name="marque"><br>

            <label>Modèle : </label>
            <input type="text" name="modele"><br>

            <div>
                <input type="radio" id="Essence" name="carburant" value="essence" checked>
                <label> Essence </label><br>
                <input type="radio" id="Diesel" name="carburant" value="diesel">
                <label> Diesel </label><br>
                <input type="radio" id="GPL" name="carburant" value="GPL">
                <label> GPL </label><br>
                <input type="radio" id="Electrique" name="carburant" value="electrique">
                <label> Electrique </label><br>
            </div>

            <button type="submit" name="btnInserer" value="ok">Ajouter</button>
        </fieldset>
    </form>

</body>
</html>

