<?php

if (isset($_POST['btnCalculer'])) {
    $erreurs[] = "";

    $pxht = htmlspecialchars($_POST['pxht']);
    if (!$pxht) {
        $erreurs['pxht'] = "le prix HT doit être renseigné";
    }

    $ttva = htmlspecialchars($_POST['ttva']);
    if (!$ttva) {
        $erreurs['ttva'] = "la TVA doit être renseigné";
    }

    if (isset($ttva) && isset($pxht)) {
        $montantTVA = $pxht * $ttva / 100;
        $montantTTC = $pxht + $montantTVA;
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

<form method="post" action="ex4_TP1_M4.php">

    <fieldset>
        <legend>Calcul des taxes</legend>

        <label>Prix HT </label>
        <input type="number" name="pxht"> <label> €</label><br>

        <label>Taux de TVA</label>
        <input type="number" name="ttva"> <label> %</label><br>

        <input type="submit" name="btnCalculer"> <br>

        <label>Montant de la TVA </label>
        <input type="textarea" value="<?=isset($montantTVA)? $montantTVA : ""?>"><br>

        <label>Montant TTC </label>
        <input type="textarea" value="<?=isset($montantTTC)? $montantTTC : ""?>"><br>
    </fieldset>


</form>

</body>
</html>
