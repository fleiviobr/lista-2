<?php
// Sort simples

$x = fgets(STDIN);
$y = explode(" ", $x);

$A = $y[0];
$B = $y[1];
$C = $y[2];

if ($A < $B && $A < $C) {
    if ($B < $C) {
        echo $A . PHP_EOL;
        echo $B . PHP_EOL;
        echo $C . PHP_EOL;
    } else {
        echo $A . PHP_EOL;
        echo $C . PHP_EOL;
        echo $B . PHP_EOL;
    }
} else if ($B < $A && $B < $C) {
    if ($A < $C) {
        echo $B . PHP_EOL;
        echo $A . PHP_EOL;
        echo $C . PHP_EOL;
    } else {
        echo $B . PHP_EOL;
        echo $C . PHP_EOL;
        echo $A . PHP_EOL;
    }
} else {
    if ($A < $B) {
        echo $C . PHP_EOL;
        echo $A . PHP_EOL;
        echo $B . PHP_EOL;
    } else {
        echo $C . PHP_EOL;
        echo $B . PHP_EOL;
        echo $A . PHP_EOL;
    }
}  
echo PHP_EOL;
echo $A . PHP_EOL;
echo $B . PHP_EOL;
echo $C . PHP_EOL;
?>