<?php
//Tempo de Jogo

$x = fgets(STDIN);

$y = explode(" ", $x);

$A = $y[0];
$B = $y[1];

if ($A == $B) {
    $x = 24;
}

else {
    for ($i = 0; $A != $B; $i++) {
        
        if ($B == 0)
        {
            $B = 24;
        }

        $X++;
        $B--;
    }
}

echo "O JOGO DUROU " . $X . " HORA(S)" . PHP_EOL;
?>