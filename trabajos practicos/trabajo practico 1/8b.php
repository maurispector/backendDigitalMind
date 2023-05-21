<?php

$exp1 = 3 >= 3;
$exp2 = 5 <> 5;
$exp3 = 15 / 5 + 2 <> 5;


$resultado = ($exp1 || $exp2) && !$exp3;

if ($resultado) {
    echo "la expresion es verdadera";
}else{
    echo "la expresio es falsa";
}