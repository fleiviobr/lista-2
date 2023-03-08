<?php
//Aumento de Salario

$entrada = fgets(STDIN);
$entrada = explode(" ", $entrada);

$salario = $entrada[0];
$percentual = $entrada[1];

if ($salario <= 400.00) {
    $percentual = 15;
    $reajuste = $salario * 0.15;
    $novoSalario = $salario + $reajuste;
} else if ($salario <= 800.00) {
    $percentual = 12;
    $reajuste = $salario * 0.12;
    $novoSalario = $salario + $reajuste;
} else if ($salario <= 1200.00) {
    $percentual = 10;
    $reajuste = $salario * 0.10;
    $novoSalario = $salario + $reajuste;
} else if ($salario <= 2000.00) {
    $percentual = 7;
    $reajuste = $salario * 0.07;
    $novoSalario = $salario + $reajuste;
} else {
    $percentual = 4;
    $reajuste = $salario * 0.04;
    $novoSalario = $salario + $reajuste;
}

echo "Novo salario: " . number_format($novoSalario, 2, '.', '') . PHP_EOL;
echo "Reajuste ganho: " . number_format($reajuste, 2, '.', '') . PHP_EOL;
echo "Em percentual: $percentual %" . PHP_EOL;
?>
