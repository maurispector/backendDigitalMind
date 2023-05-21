<?php

$exp1 = 3 * (-3) * 2;
$exp2 = 3 - (-3) *2 ;
$exp3 = 1 ^ 3 * 2;
$exp4 = 6;

$resultado = !(!($exp1 > $exp2 || $exp3 > $exp4));

if ($resultado) {
    echo "La expresion es verdadera";
}else{
    echo "La expresion es falsa";
}