<?php 

$A = 10;
$B = 20;

$comparacion = !(( !($A != 10) || (20<$B)) && ($A == 10 ) && FALSE) && TRUE ;

if ($comparacion) {
    echo "La expresion es verdadero";
}else { 
    echo "la expresion es falsa";
}
?>