<?php
//Formula de Baskara

$x = fgets(STDIN);

$y = explode(" ", $x);

$A = $y[0];
$B = $y[1];
$C = $y[2];

delta = ($B * $B) - (4 * $A * $C);

r1 = (-$B + sqrt($delta)) / (2 * $A);
r2 = (-$B - sqrt($delta)) / (2 * $A);

if($delta < 0 || $A == 0){
    echo "Impossivel calcular" . PHP_EOL;
} else {
    echo "R1 = " . number_format($r1, 5, '.', '') . PHP_EOL;
    echo "R2 = " . number_format($r2, 5, '.', '') . PHP_EOL;
}
?>