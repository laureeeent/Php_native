<?php

    $langages = ["java","php","javascript","SQL","merde"];

    if( isset($_POST['btnValider']) ) {
        $nom = htmlspecialchars($_POST['nom']);
        $age = filter_var($_POST['age'], FILTER_VALIDATE_INT);
        $langage = htmlspecialchars($langages[$_POST['langage']]);

        if (!$age) {
            $messageErreurAge = "L'age doit être un entier.";
        }

        $valeurRecues= filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
        var_dump($valeurRecues);

        echo 'Voici le paramètre nom que j\'ai reçu en POST : '.$nom."<br>";
        echo 'Voici le parmètre langage que j\'ai reçu en POST: '.$langage."<br>";
    }

    if( isset($_GET['btnValider']) ) {
        $nom = htmlspecialchars($_GET['nom']);
        $langage = htmlspecialchars($langages[$_POST['langage']]);
        echo 'Voici le paramètre nom que j\'ai reçu en GET: '.$nom."<br>";
        echo 'Voici le parmètre langage que j\'ai reçu en GET: '.$langage."<br>";
    }

if( isset($_REQUEST['btnValider']) ) {
    $nom = htmlspecialchars($_REQUEST['nom']);
    $langage = htmlspecialchars($langages[$_POST['langage']]);
    echo 'Voici le paramètre nom que j\'ai reçu en GET ou en POST: '.$nom."<br>";
    echo 'Voici le parmètre langage que j\'ai reçu en GET ou en POST: '.$langage."<br>";
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
    <form action="formulaire1.php" method="post">
        <label>Nom : </label>
        <input type="text" id="idNom" name="nom">
        <br>

        <label>Âge : </label>
        <input type="text" id="idAge" name="age">
        <?=isset($messageErreurAge)?"<p>".$messageErreurAge."</p>" : ""?>

        <br>

        <label>Langage préféré : </label>
        <select id="idLangage" name="langage">
            <?php foreach ($langages as $indice => $valeur):?>
                <option value="<?=$indice?>"><?=$valeur?></option>
            <?php endforeach;?>
        </select>

        <br>

        <input type="submit" value="ok" name="btnValider">
    </form>

</body>
</html>
