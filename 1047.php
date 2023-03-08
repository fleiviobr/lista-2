<?php
//Tempo de Jogo com Minutos
 
$entrada = explode(" ", readline());
$hi = intval($entrada[0]);
$mi = intval($entrada[1]);
$hf = intval($entrada[2]);
$mf = intval($entrada[3]);

$minutos_iniciais = $hi * 60 + $mi;
$minutos_finais = $hf * 60 + $mf;

if ($minutos_iniciais < $minutos_finais) {
    $duracao = $minutos_finais - $minutos_iniciais;
} else {
    $duracao = (24 * 60 - $minutos_iniciais) + $minutos_finais;
}

$horas = intval($duracao / 60);
$minutos = $duracao % 60;

printf("O JOGO DUROU %d HORA(S) E %d MINUTO(S)\n", $horas, $minutos);
?>