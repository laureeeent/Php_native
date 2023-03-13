<?php

require_once "connexion_voitures.php";

$connexion = false;
$pers = null;

if(isset($_POST['btnConnexion'])) {
    $pers = null;
    $no_id = "";
    $nom = "";

    $messageErreur = "";
    $erreur = false;

    $no_id = htmlspecialchars(trim($_POST['no_id']));
    if(!$no_id) {
        $messageErreur['no_id'] = "Veuillez renseigner le numéro d'identifiant.";
        $erreur = true;
    }

    $nom = htmlspecialchars(trim($_POST['nom']));
    if(!$nom) {
        $messageErreur["nom"] = "Le champ nom est vide ou incrorrectement rempli.";
        $erreur = true;
    }


    if(!$erreur) {
        $query = "SELECT * FROM  proprietaires WHERE id_pers = :id AND nom = :nom";

        $prep = $pdo->prepare($query);
        $prep->bindParam(":id", $no_id);
        $prep->bindParam(":nom", $nom);

        $prep->execute();

        $pers = $prep->fetch();

        if ($pers != false) {
            echo "<br>id_pers : ".$pers["id_pers"].
                "<br>nom : ".$pers["nom"].
                "<br>prenom : ".$pers["prenom"].
                "<br>adresse : ".$pers["adresse"].
                "<br>ville : ".$pers["ville"].
                "<br>code postal : ".$pers["codepostal"];

            $connexion = true;
        }
    }
}

if (isset($_POST["btnEnregistrer"])) {
    $nom = "";
    $prenom = "";
    $adresse = "";
    $cp = "";
    $ville = "";

    $messageErreur = "";
    $erreur = false;

    $nom = htmlspecialchars(trim($_POST["nom"]));
    if (!$nom) {
        $messageErreur["nom"] = "Vous ne pouvez pas laisser le champ nom vide.";
        $erreur = true;
    }

    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    if (!$prenom) {
        $messageErreur["prenom"] = "Vous ne pouvz pas laisser le champ nom vide.";
        $erreur = true;
    }

    $adresse = htmlspecialchars(trim($_POST["adresse"]));
    if (!$adresse) {
        $messageErreur["adresse"] = "Vous ne pouvez pas laisser le champ adresse vide.";
        $erreur = true;
    }

    $cp = htmlspecialchars(trim($_POST["cp"]));
    if (!$cp) {
        $messageErreur["cp"] = "Vous ne pouvez pas laisser le champ code postal vide.";
        $erreur = true;
    }

    $ville = htmlspecialchars(trim($_POST["ville"]));
    if (!$ville) {
        $messageErreur["ville"] = "Vous ne pouvez pas laisser le champ ville vide.";
        $erreur = true;
    }

    if (!$erreur) {
        $query = 'UPDATE proprietaires set nom = :nom,
                         prenom = :prenom, adresse = :adresse, ville = :ville, codepostal = :codepostal
                         WHERE id_pers = :id';

        $prep = $pdo->prepare($query);

        $prep->bindValue(':nom',$pers["nom"]);
        $prep->bindValue(':prenom',$pers["prenom"]);
        $prep->bindValue(':adresse',$pers["adresse"]);
        $prep->bindValue(':ville',$pers["ville"]);
        $prep->bindValue(':codepostal',$pers["codepostal"]);
        $prep->bindValue(':id',$pers["id_pers"]);

        $prep->execute();

        $pers = null;
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

<form method="post" action="modifierInfoUser.php">

    <fieldset>
        <legend> Accéder à vos information </legend>

        <label>Numéro d'identification : </label>
        <input type="number" name="no_id" value="<?=isset($pers["id_pers"])? $pers["id_pers"] : "" ?>"> <br>

        <label>Nom de famille : </label>
        <input type="text" name="nom" value="<?=isset($pers["nom"])? $pers["nom"] : "" ?>"> <br> <br>

        <button type="submit" name="btnConnexion" value="ok">Connexion</button>
    </fieldset>

</form>

<br>

<form method="post" action="modifierInfoUser.php">

    <fieldset>
        <legend> Modification de vos information </legend>

        <label>Nom de famille : </label>
        <input type="text" name="nom" value="<?=isset($pers["nom"])? $pers["nom"] : "" ?>"> <br>

        <label>Prénom : </label>
        <input type="text" name="prenom" value="<?=isset($pers["prenom"])? $pers["prenom"] : "" ?>"> <br>

        <label>Adresse : </label>
        <input type="text" name="adresse" value="<?=isset($pers["adresse"])? $pers["adresse"] : "" ?>"> <br>

        <label>Code Postal : </label>
        <input type="text" name="cp" value="<?=isset($pers["codepostal"])? $pers["codepostal"] : "" ?>"> <br>

        <label>Ville : </label>
        <input type="text" name="ville" value="<?=isset($pers["ville"])? $pers["ville"] : "" ?>"> <br> <br>

        <button type="submit" name="btnEnregistrer">Enregistrer</button>
    </fieldset>

</form>

</body>
</html>
