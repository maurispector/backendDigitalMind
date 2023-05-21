<?php

$N = readline("ingrese un valor: ");

if($N == 0) {
    echo "El numero es cero";
}else{ // SI NO ES CERO
    echo ($N % 2 == 0) ? "El numero es par" : "El numero es impar" ;
    echo ($N > 0) ? "El numero el numero es positivo " : "El numero es negativo " ;
}