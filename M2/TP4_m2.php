<?php

echo "Exercice 1 : <br><br>";
function tirage($valeur1) {
    $tirage_ = 0;
    $rand = "";
    while ($rand !== $valeur1) {
        $rand = rand(0, 1000);
        $tirage_++;
    }
    return $tirage_;
}
$var = tirage(1000);
echo "la fonction a réalisé ".$var." tirages";

echo "<br><br>Exercice 2 : <br><br>";

$v1 = 15;
$v2 = 36;

echo "valeur1 = ".$v1.", valeur2 = ".$v2."<br><br>";
function tri(&$valeur1, &$valeur2){
    if ($valeur1 < $valeur2) {
        $tamp = $valeur2;
        $valeur2 = $valeur1;
        $valeur1 = $tamp;
    }
}

tri($v1, $v2);
echo "après fonction : <br>";
echo "valeur1 = ".$v1.", valeur2 = ".$v2;

echo "<br><br>Exercice 3 : <br><br>";

function pgcd($valeur1, $valeur2) {
    $pgcd = 0;

    if($valeur1 > $valeur2) {
        while($valeur2 > 0) {
            $t = $valeur2;
            $valeur2 = $valeur1 % $valeur2;
            $valeur1 = $t;
        }
        $pgcd = $valeur1;
    }

    return $pgcd;
}
$var1 = 426;
$var2 = 124;
$pgcd = pgcd($var1, $var2);
echo "le pgcd de ".$var1." et ".$var2." est : ".$pgcd."<br>";


echo "<br><br>Exercice 4 : <br><br>";

function trianglePascal($n) {
    $ligne1[0] = 1;
    $tabtri[0] = $ligne1;
    for ($i=1; $i < $n; $i++) {
        $lignen[0] = 1;
        if ($i === 1) {
            $lignen[1] = 1;
        }
        else {
            for ($j = 1; $j <= $i; $j++) {
                $lignen[$j] = $tabtri[$i-1][$j-1] + $tabtri[$i-1][$j];
            }
            $lignen[$i] = 1;
        }

        $tabtri[$i] = $lignen;
    }
    return $tabtri;
}

var_dump(trianglePascal(5));
?>
