<?php
//DDD 

$entrada = fgets(STDIN);

if ($entrada == 61) {
    echo "Brasilia" . PHP_EOL;
} else if ($entrada == 71) {
    echo "Salvador" . PHP_EOL;
} else if ($entrada == 11) {
    echo "Sao Paulo" . PHP_EOL;
} else if ($entrada == 21) {
    echo "Rio de Janeiro" . PHP_EOL;
} else if ($entrada == 32) {
    echo "Juiz de Fora" . PHP_EOL;
} else if ($entrada == 19) {
    echo "Campinas" . PHP_EOL;
} else if ($entrada == 27) {
    echo "Vitoria" . PHP_EOL;
} else if ($entrada == 31) {
    echo "Belo Horizonte" . PHP_EOL;
} else {
    echo "DDD nao cadastrado" . PHP_EOL;
}
?>