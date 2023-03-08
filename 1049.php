<?php
// Animal

$entrada = fgets(STDIN);
$entrada2 = fgets(STDIN);
$entrada3 = fgets(STDIN);

if ($entrada == "vertebrado") {
    if ($entrada2 == "ave") {
        if ($entrada3 == "carnivoro") {
            echo "aguia" . PHP_EOL;
        } else {
            echo "pomba" . PHP_EOL;
        }
    } else {
        if ($entrada3 == "onivoro") {
            echo "homem" . PHP_EOL;
        } else {
            echo "vaca" . PHP_EOL;
        }
    }
} else {
    if ($entrada2 == "inseto") {
        if ($entrada3 == "hematofago") {
            echo "pulga" . PHP_EOL;
        } else {
            echo "lagarta" . PHP_EOL;
        }
    } else {
        if ($entrada3 == "hematofago") {
            echo "sanguessuga" . PHP_EOL;
        } else {
            echo "minhoca" . PHP_EOL;
        }
    }
}
