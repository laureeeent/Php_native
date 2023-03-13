<?php

$erreur=false;

if( isset($_POST['btnValider']) ) {
    $erreur = false;
    $liste_erreur[] = "";

    $nom = htmlspecialchars($_POST['nom']);
    if (!$nom){
        $erreur = true;
        $liste_erreur['nom'] = 'Le nom doit être renseigné';
    }

    $prenom = htmlspecialchars($_POST['prenom']);
    if (!$prenom){
        $erreur = true;
        $liste_erreur['prenom'] = 'Le prenom doit être renseigné';
    }

    $adresse = htmlspecialchars($_POST['adresse']);
    if (!$adresse){
        $erreur = true;
        $liste_erreur['adresse'] = 'L\'adresse doit être renseignée';
    }

    $cp = htmlspecialchars($_POST['cp']);
    if (!$cp){
        $erreur = true;
        $liste_erreur['cp'] = 'Le code postal doit être renseigné';
    }

    $ville = htmlspecialchars($_POST['ville']);
    if (!$ville){
        $erreur = true;
        $liste_erreur['ville'] = 'La ville doit être renseignée';
    }

    $info_client = [$nom, $prenom, $adresse, $cp, $ville];
}

if (isset($_GET['btnAbonner'])) {
    $erreur = false;
    $liste_erreur[] = "";

    $email = htmlspecialchars($_GET['email']);
    if (!$email){
        $erreur = true;
        $liste_erreur['email'] = 'L\'email doit être renseigné';
    }

    $navigateur = htmlspecialchars($_GET['navigateur']);
    $info_client = [$email, $navigateur];
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

<form action="TP1_M4.php" method="post">

    <fieldset>
        <legend>Adresse client : </legend>

        <label>Nom : </label>
        <input type="text" id="input_nom" name="nom">
        <br>

        <label>Prénom : </label>
        <input type="text" id="input_prenom" name="prenom">
        <br>

        <label>Adresse : </label>
        <input type="text" id="input_adresse" name="adresse">
        <br>

        <label>cp: </label>
        <input type="text" id="input_cp" name="cp">
        <br>

        <label>ville : </label>
        <input type="text" id="input_ville" name="ville">
        <br>

        <input type="submit" value="Envoyer le formulaire" name="btnValider">
    </fieldset>

</form>



<form action="TP1_M4.php" method="get" id="form_email">

<fieldset id="fieldset_email">
    <legend>S'abonner</legend>

    <label>E-Mail</label>
    <input type="text" id="input_email" name="email"> <br>

    <input type="submit" value="Valider" name="btnAbonner">
</fieldset>
</form>

<script>
    let fieldset = document.getElementById("fieldset_email");
    let input_navigator = document.createElement("input");
    input_navigator.value = navigator.userAgent;
    input_navigator.name = "navigateur";
    input_navigator.hidden = true;
    fieldset.appendChild(input_navigator);
</script>


<?php if ($erreur):?>
    <?php foreach ($liste_erreur as $erreur):?>
        <p><?=$erreur?></p><br>
    <?php endforeach;?>

<?php else :?>
    <?php if (isset($info_client)) :?>
        <?php foreach ($info_client as $valeur):?>
            <?=isset($valeur) ? "<p>".$valeur."</p>" : "" ?>
        <?php endforeach;?>
    <?php endif;?>
<?php endif;?>

</body>
</html>

