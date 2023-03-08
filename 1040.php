<?php
//Media 3

$x = fgets(STDIN);

$y = explode(" ", $x);

$A = $y[0];
$B = $y[1];
$C = $y[2];
$D = $y[3];

$media = (($A * 2) + ($B * 3) + ($C * 4) + ($D * 1)) / 10;

if($media < 5) { 
    echo "Media: " . number_format(($media - 0.1), 1, '.', '') . PHP_EOL;
} else {
    echo "Media: " . number_format($media, 1, '.', '') . PHP_EOL;
}

if ($media >= 7.0) {
    echo "Aluno aprovado." . PHP_EOL;
}

else if ($media < 5.0) {
    echo "Aluno reprovado." . PHP_EOL;
}

else {
    echo "Aluno em exame." . PHP_EOL;
    $E = fgets(STDIN);
    echo "Nota do exame: " . number_format($E, 1, '.', '') . PHP_EOL;
    $media = ($media + $E) / 2;
    if ($media >= 5.0) {
        echo "Aluno aprovado." . PHP_EOL;
    }
    else {
        echo "Aluno reprovado." . PHP_EOL;
    }
    echo "Media final: " . number_format($media, 1, '.', '') . PHP_EOL;
} 
?>