<?php
//Teste de Seleção 1

$x = fgets(STDIN);

$y = explode(" ", $x);

$A = $y[0];
$B = $y[1];
$C = $y[2];
$D = $y[3];

if ($B > $C && $D > $A && $C + $D > $A + $B && $C > 0 && $D > 0 && $A % 2 == 0) {
    echo "Valores aceitos" . PHP_EOL;
} else {
    echo "Valores nao aceitos" . PHP_EOL;
}
?>