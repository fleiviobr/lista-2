<?php
//Tempo de Jogo com Minutos

$entrada = fgets(STDIN);
$entrada = explode(" ", $entrada);

$inicio = $entrada[0];
$fim = $entrada[1];

if ($inicio == $fim) {
    echo "O JOGO DUROU 24 HORA(S) E 0 MINUTO(S)" . PHP_EOL;
} else if ($inicio < $fim) {
    $hora = $fim - $inicio;
    echo "O JOGO DUROU $hora HORA(S) E 0 MINUTO(S)" . PHP_EOL;
} else {
    $hora = 24 - $inicio + $fim;
    echo "O JOGO DUROU $hora HORA(S) E 0 MINUTO(S)" . PHP_EOL;
}
?>