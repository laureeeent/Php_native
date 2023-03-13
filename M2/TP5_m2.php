<?php

$regexDate = '#^(\d{2})\/(\d{2})\/(\d{4})$#';

if ( preg_match($regexDate, '08/03/2023', $result) > 0 ){
    echo "expression rationnelle passée <br>";
    echo 'Le jour : '.$result[1]."<br>";
    echo 'Le mois : '.$result[2]."<br>";
    echo "L'année : ".$result[3]."<br>";
}
else {
    echo 'La chaine de caractère fournie n\'est pas une date <br>';
}

$dateAnglais = preg_replace($regexDate, '$3-$2-$1', '08/03/2023');

echo '<br> Exercice 1 : <br><br>';

$regexCB = '#^(\d{4})([ ]{0,1})(\d{4})([ ]{0,1})(\d{4})([ ]{0,1})(\d{4})$#';

$regexCBcourt = '#^((\d{4})([ ]{0,1}){3})(\d{4})$#';

$cartes = [
    '1234 5678 9123 4567', '5555555555555555', '55555555555tg555', '1234'
];
foreach ($cartes as $carte) {
    if ( preg_match($regexCB, $carte) > 0) {
        echo 'Le numéro '.$carte.' passe l\'expression rationelle<br><br>';
    }
    else {
        echo 'Le numéro '.$carte.' ne passe pas l\'expression rationelle<br><br>';
    }
}

echo '<br><br> Exercice 2 : <br><br>';

$regexHTTP = '#^www\.([a-zA-Z]+)([.-]?)([a-zA-Z]+)\.(\w{2,4})$#';

$adressesHTTP = [
    'www.adresse-demerde.giga',
    'www.gigachad-leplusbeau.fr',
    "ww.adresse.fr",
    "www.cette adresse.fr",
    "fff.jadorelavie.com",
    "www.worldwideweb.com",
    "www.worldwideweb.comme"
];

foreach ($adressesHTTP as $adresse) {
    if ( preg_match($regexHTTP, $adresse) > 0) {
        echo 'L\'adresse '.$adresse.' passe l\'expression rationelle<br><br>';
    }
    else {
        echo 'L\'adresse '.$adresse.' ne passe pas l\'expression rationelle<br><br>';
    }
}

echo '<br><br> Exercice 3 : <br><br>';

$chaine = '\n salut c\'est cool \n';
$motif = "<br>";

$nouv_chaine = preg_replace('\\n', $motif, $chaine );

echo "chaine avant =".$chaine.", chaine après = ".$nouv_chaine;

?>