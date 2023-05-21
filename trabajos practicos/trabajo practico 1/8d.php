<?php

$exp1 = 3 >= 4;
$exp2 = 5 > 3;
$exp3 = 3 > 3;
$exp4 = 4 <= 4;
$exp5 = 5 > 4;
$exp6 = 6 >= 7;


$resultado = ($exp1 && $exp2 && !$exp3) || !$exp4 || $exp5 || $exp6;

if ($resultado){
    echo "La expresion es verdadera";
}else{
    echo "La expresion es falsa";
}