<?php
/* 
|\
| \
A  B
|   \
|__C_\ 

Equilatero = 3 lados iguales ( $A == $B && $C == $B )
Isosceles = 2 lados iguales ($A == $B || $C == $B || $A == $C)
Escaleno = 3 lados diferentes else */

$A = readline( "ingrese A: ");
$B = readline( "ingrese B: ");
$C = readline( "ingrese C: ");

if ($A == $B && $B == $C){
    echo "Equilatero";
}else if ($A == $B || $C == $B || $A == $C) {
    echo "Isosceles";
}else {
    echo "Escaleno";
}