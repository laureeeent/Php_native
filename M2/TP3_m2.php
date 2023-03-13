<?php
echo "Exercice 1 :<br><br>";
$phrase = "bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR";
echo '$phrase = '.$phrase.' <br><br>';
echo '$phrase = '.ucwords(strtolower($phrase)).' <br><br>';


echo "Exercice 2 :<br><br>";
$suiteNP = "Laurent Chibois, Guillaume Ollivier, Valentin De Faria Rodrigues, Arthur Le Goanvec, Medhy Boulon";
$tabNP = explode(", ", $suiteNP);

$tabN_P[] = "";
$vari = 0;
foreach ($tabNP as $np){
    $tab = explode(" ", $np, 2);
    $tabN_P[$vari] =$tab;
    $vari++;
}

var_dump($tabN_P);
echo '<pre>';
foreach($tabN_P as $prenom_nom) {
    printf("%-20s  %-20s\n", $prenom_nom[0], $prenom_nom[1]);
}
echo '</pre> <br><br>';

echo "Exercice 3 :<br><br>";

$str_ex = ['1abc', '10ghi', '2def', '7klm'];
natsort($str_ex);
var_dump($str_ex);

echo "<br><br>Exercice 4 :<br><br>";
$dateNaissance = date_create('2001-09-28');
$ajd = date_create('now');

$interval = date_diff($dateNaissance, $ajd);


echo '$dateNaissance = '.date_format($dateNaissance,"Y-m-d H:i:s").', $ajd = '.date_format($ajd,"Y-m-d H:i:s")."<br><br>";
echo 'Âge Laurent = '.$interval->format('%y ans, %m mois, %d jours, %h heures, %i minutes et %s secondes')."<br><br>";



echo "Exercice 5 :<br><br>";

$date = date_create('2017-12-25');
$jour = date("N", date_timestamp_get($date));

$jour_str = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
echo "le numéro du jour de la semaine du ".date_format($date, "Y-m-d")." est le ".$jour_str[$jour-1];


echo "<br><br>Exercice 6 :<br><br>";

$lesmai[] = "";
$jour_str_mai = ["Week-end prolongé", "Mardi", "Mercredi", "Jeudi", "Week-end prolongé", "Désolé", "Désolé"];

for ($i=2018; $i < 2038; $i++) {
    $date_str = $i."-5-1";
    $lesmai[$i-2018]= date_create($date_str);
}

foreach ($lesmai as $date_mai) {
    $jour = date("N", date_timestamp_get($date_mai));
    echo date_format($date_mai, "Y-m-d") . " TP3_m2.php" .$jour_str_mai[$jour-1];
    echo "<br>";
}


echo "<br><br>Exercice 7 :<br><br>";

$lespaques[] = "";
$lesascencions[] = "";

$diff40 = new DateInterval("P40D");

for ($i=2018; $i < 2038; $i++) {
    echo date("Y-m-d",easter_date($i)).'<br>';
    $lepaque =  date_create(date("Y-m-d",easter_date($i)) );
    date_add($lepaque, $diff40);
    $lespaques[$i]= $lepaque;
    echo "ascension de ".$i." : ".date_format($lespaques[$i], "Y-m-d")."<br>";
}












































?>