<?php
// Coordenadas de um ponto

    $entrada = explode(" ", fgets(STDIN));
    $x = number_format($entrada[0], 1, ".", "");
    $y = number_format($entrada[1], 1, ".", "");

    if($x == 0 && $y == 0){
        echo"Origem\n";
    }else if($x>0 && $y>0){
        echo"Q1\n";
    }else if($x>0 && $y<0){
        echo"Q4\n";
    }else if($x<0 && $y<0){
        echo"Q3\n";
    }else if($x<0 && $y>0){
        echo"Q2\n";
    }else if($x ==0){
        echo"Eixo Y\n";
    }else if($y == 0){
        echo"Eixo X\n";
    }
?> 