<?php

    echo 'Exercice 1 : <br>';
    $var1 = true;
    $var2 = 42;
    $var3 = 12.34;
    $var4 = 'Hello !';

    var_dump($var1);
    var_dump($var2);
    var_dump($var3);
    var_dump($var4);

echo 'Exercice 2 : <br>';

echo '$x = "PHP 5", $y = "PHP 5" et $z = "PHP 5" <br><br>';

echo 'Exercice 3 : <br>';

echo '$a = "0", $b = "TRUE", $c = "FALSE" <br>
$d = false, $e = true, $f = false;<br><br>';

echo 'Exercice 4 : <br>';

    $X="PHP7";
    $A=&$X;
    $Y="7 eme version de PHP";
    var_dump($X);
    var_dump($Y);
    var_dump($A);

    $Z=$Y*10;
    $X=$Y*$Y;
    var_dump($X);
    var_dump($Y);
    var_dump($A);
    var_dump($Z);

    ?>
