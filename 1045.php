<?php
//Tipos de Triângulos

$x = fgets(STDIN);

$y = explode(" ", $x);

$a = $y[0];
$b = $y[1];
$c = $y[2];

if ($a == 0 && $b == 0 && $c == 0) {
    echo "NAO FORMA TRIANGULO" . PHP_EOL;
} else {
    if ($a * $a == $b * $b + $c * $c) {
        echo "TRIANGULO RETANGULO" . PHP_EOL;
    }
    if ($a * $a > $b * $b + $c * $c) {
        echo "TRIANGULO OBTUSANGULO" . PHP_EOL;
    }
    if ($a * $a < $b * $b + $c * $c) {
        echo "TRIANGULO ACUTANGULO" . PHP_EOL;
    }
    if ($a == $b && $b == $c) {
        echo "TRIANGULO EQUILATERO" . PHP_EOL;
    }
    if (($a == $b && $b != $c) || ($a == $c && $c != $b) || ($b == $c && $c != $a)) {
        echo "TRIANGULO ISOSCELES" . PHP_EOL;
    }
}
?>