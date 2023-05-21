<?php

$exp1 = 3 * 2 - 4 / 2 * 1;
$exp2 = 3 * 2 + 2 * 1 ;
$exp3 = 5;
$exp4 = 11 % 4;

$resultado = ($exp1 < $exp2) && ($exp3 > $exp4);
if ($resultado) {
    echo "la expresion es verdadera";
}else{
    echo "La expresion es falsa";
}