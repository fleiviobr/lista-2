<?php
//Lanche
$y = explode(" ", fgets(STDIN));
$cod = $y[0];
$quant = $y[1];
$preco = 0;
switch ($cod) {
    case 1:
        $preco = 4.00;
        break;
    case 2:
        $preco = 4.50;
        break;
    case 3:
        $preco = 5.00;
        break;
    case 4:
        $preco = 2.00;
        break;
    case 5:
        $preco = 1.50;
        break;
}
echo "Total: R$ " . number_format($preco * $quant, 2, '.', '') . PHP_EOL;
?>