<?php
// Tempo de um Evento

fscanf(STDIN, "%d dia(s)", $day_i);
fscanf(STDIN, "%d : %d : %d", $hour_i, $minute_i, $second_i);

fscanf(STDIN, "%d dia(s)", $day_f);
fscanf(STDIN, "%d : %d : %d", $hour_f, $minute_f, $second_f);

$time_i = $day_i * 86400 + $hour_i * 3600 + $minute_i * 60 + $second_i;
$time_f = $day_f * 86400 + $hour_f * 3600 + $minute_f * 60 + $second_f;

$diff = $time_f - $time_i;

$days = intdiv($diff, 86400);
$diff -= $days * 86400;
$hours = intdiv($diff, 3600);
$diff -= $hours * 3600;
$minutes = intdiv($diff, 60);
$diff -= $minutes * 60;
$seconds = $diff;

echo $day . " dia(s)" . PHP_EOL;
echo $hour . " hora(s)" . PHP_EOL;
echo $minute . " minuto(s)" . PHP_EOL;
echo $second . " segundo(s)" . PHP_EOL;
?>