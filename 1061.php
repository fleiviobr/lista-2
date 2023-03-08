<?php
// Tempo de um Evento

$entrada = fgets(STDIN);
$entrada = explode(" ", $entrada);

$horaInicial = $entrada[0];
$minutoInicial = $entrada[1];
$segundoInicial = $entrada[2];

$horaFinal = $entrada[3];
$minutoFinal = $entrada[4];
$segundoFinal = $entrada[5];

$horaInicialSegundos = $horaInicial * 3600;
$minutoInicialSegundos = $minutoInicial * 60;

$horaFinalSegundos = $horaFinal * 3600;
$minutoFinalSegundos = $minutoFinal * 60; 

$segundosInicial = $horaInicialSegundos + $minutoInicialSegundos + $segundoInicial;
$segundosFinal = $horaFinalSegundos + $minutoFinalSegundos + $segundoFinal;

$duracaoSegundos = $segundosFinal - $segundosInicial;

if ($duracaoSegundos <= 0) {
    $duracaoSegundos = 86400 + $duracaoSegundos;
}

$duracaoHoras = floor($duracaoSegundos / 3600);
$duracaoMinutos = floor(($duracaoSegundos % 3600) / 60);
$duracaoSegundos = floor(($duracaoSegundos % 3600) % 60);

echo $duracaoHoras . ":" . $duracaoMinutos . ":" . $duracaoSegundos . PHP_EOL;
?>