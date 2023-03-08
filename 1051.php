<?php 
// Imposto de Renda

$entrada = fgets(STDIN);

if ($entrada <= 2000) {
    echo "Isento" . PHP_EOL;
} else if ($entrada <= 3000) {
    $imposto = ($entrada - 2000) * 0.08;
    echo "R$ " . number_format($imposto, 2, '.', '') . PHP_EOL;
} else if ($entrada <= 4500) {
    $imposto = 1000 * 0.08 + ($entrada - 3000) * 0.18;
    echo "R$ " . number_format($imposto, 2, '.', '') . PHP_EOL;
} else {
    $imposto = 1000 * 0.08 + 1500 * 0.18 + ($entrada - 4500) * 0.28;
    echo "R$ " . number_format($imposto, 2, '.', '') . PHP_EOL;
}
?>