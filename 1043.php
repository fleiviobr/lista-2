<?php
//Triangulo

$x = fgets(STDIN);

$y = explode(" ", $x);

$a = $y[0];
$b = $y[1];
$c = $y[2];

if ($a < $b + $c && $b < $a + $c && $c < $a + $b) {
    echo "Perimetro = " . number_format($a + $b + $c, 1, '.', '') . PHP_EOL;
} else {
    echo "Area = " . number_format((($a + $b) * $c) / 2, 1, '.', '') . PHP_EOL;
}
?>