<?php
// Tempo de um Evento

$linha1 = explode(' ', readline());
$linha2 = explode(' ', readline());

$diaInicial = intval($linha1[1]);
$horaInicial = intval($linha2[0]);
$minutoInicial = intval($linha2[2]);
$segundoInicial = intval($linha2[4]);

$linha1 = explode(' ', readline());
$linha2 = explode(' ', readline());

$diaFinal = intval($linha1[1]);
$horaFinal = intval($linha2[0]);
$minutoFinal = intval($linha2[2]);
$segundoFinal = intval($linha2[4]);

$totalSegundosInicial = $diaInicial * 86400 + $horaInicial * 3600 + $minutoInicial * 60 + $segundoInicial;
$totalSegundosFinal = $diaFinal * 86400 + $horaFinal * 3600 + $minutoFinal * 60 + $segundoFinal;

$duracaoSegundos = $totalSegundosFinal - $totalSegundosInicial;

$duracaoDias = intval($duracaoSegundos / 86400);
$duracaoSegundos %= 86400;

$duracaoHoras = intval($duracaoSegundos / 3600);
$duracaoSegundos %= 3600;

$duracaoMinutos = intval($duracaoSegundos / 60);
$duracaoSegundos %= 60;

echo "{$duracaoDias} dia(s)" . PHP_EOL;
echo "{$duracaoHoras} hora(s)" . PHP_EOL;
echo "{$duracaoMinutos} minuto(s)" . PHP_EOL;
echo "{$duracaoSegundos} segundo(s)" . PHP_EOL;
?>