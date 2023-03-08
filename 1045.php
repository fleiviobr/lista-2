<?php
// Tipo de Triângulos

$entrada = readline();
$valores = explode(" ", $entrada);
sort($valores); 

if (($valores[2] >= $valores[1] + $valores[0])) {
  echo "NAO FORMA TRIANGULO\n";
} else {

  if ($valores[2]*$valores[2] == $valores[1]*$valores[1] + $valores[0]*$valores[0]) {
    echo "TRIANGULO RETANGULO\n";
  }
  if ($valores[2]*$valores[2] > $valores[1]*$valores[1] + $valores[0]*$valores[0]) {
    echo "TRIANGULO OBTUSANGULO\n";
  }
  if ($valores[2]*$valores[2] < $valores[1]*$valores[1] + $valores[0]*$valores[0]) {
    echo "TRIANGULO ACUTANGULO\n";
  }
  if ($valores[2] == $valores[1] && $valores[1] == $valores[0]) {
    echo "TRIANGULO EQUILATERO\n";
  }
  if (($valores[2] == $valores[1] && $valores[1] != $valores[0]) || ($valores[2] == $valores[0] && $valores[0] != $valores[1]) || ($valores[1] == $valores[0] && $valores[0] != $valores[2])) {
    echo "TRIANGULO ISOSCELES\n";
  }
}
?>
