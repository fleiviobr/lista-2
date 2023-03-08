<?php
//Multiplos

$x = fgets(STDIN);

$y = explode(" ", $x);

$A = $y[0];
$B = $y[1];

if ($A % $B == 0 || $B % $A == 0) {
    echo "Sao Multiplos" . PHP_EOL;
} else {
    echo "Nao sao Multiplos" . PHP_EOL;
}
?>