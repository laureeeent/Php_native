<?php

$info_laurent[] = 'Laurent';
$info_laurent[] = 'Saint-Etienne-de-Monltuc';
$info_laurent[] = '21';

$info_valentin[] = 'Valou';
$info_valentin[] = 'Sainte-luce sur Loire ';
$info_valentin[] = '22';

$info['laurent'] = $info_laurent;
$info['valentin'] = $info_valentin;

echo 'contenu $info : <br>';
var_dump($info);

$info_laurent_associatif["prenom"] = 'Laurent';
$info_laurent_associatif["ville"] = 'Saint-Etienne-de-Monltuc';
$info_laurent_associatif["age"] = '21';

$info_valentin_associatif["prenom"] = 'Valou';
$info_valentin_associatif["ville"] = 'Sainte-luce sur Loire ';
$info_valentin_associatif["age"] = '22';

$info_associatif['laurent'] = $info_laurent_associatif;
$info_associatif['valentin'] = $info_valentin_associatif;

echo 'contenu $info_valentin_associatif : <br>';
var_dump($info_associatif);

echo' <br> Exercice 3 : <br><br>';

echo 'Tableau multidimensionnels : <br>';

foreach ($info as $nom => $info_n) {
    echo 'Element '.$nom.' <br>';
    $vari = 0;
    foreach ($info_n as $var){
        echo '° élément ' . $vari . ' : '. $var.'<br>';
        $vari++;
    }
    echo '<br>';
}


echo '<br>';

echo '<br>';

echo 'Element Laurent associatif <br>';

foreach ($info_laurent_associatif as $cle => $var){
    echo '  ° élément ' . $cle . ' : '. $var.'<br>';
    $vari++;
}

echo '<br>';

echo 'Element Valentin associatif <br>';

foreach ($info_valentin_associatif as $cle => $var){
    echo '  ° élément ' . $cle . ' : '. $var.'<br>';
    $vari++;
}
echo '<br><br> Exercice 4 : <br><br>';

$liste_email[] = "laurentchibois@gmail.com";
$liste_email[] = "jeandupont@outlook.com";
$liste_email[] = "ludivineindividu@gmail.com";
$liste_email[] = "valentindefariarodrigues@yahoo.com";
$liste_email[] = "arthurlegoanvec@outlook.com";
var_dump($liste_email);

$occurrence['gmail.com'] = 0;
$occurrence['outlook.com'] = 0;
$occurrence['yahoo.com'] = 0;



foreach ($liste_email as $email) {
    $decompo = explode('@', $email);
    if ($decompo[1] === "gmail.com") {
        $occurrence['gmail.com']++;
    }
    elseif ($decompo[1] === "outlook.com"){
        $occurrence['outlook.com']++;
    }
    elseif ($decompo[1]==="yahoo.com") {
        $occurrence['yahoo.com']++;
    }
}

echo '<br><br>';

var_dump($occurrence);



?>

