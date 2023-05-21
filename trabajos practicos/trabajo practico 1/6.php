<?php

$a = 10;
$b = 12;
$c = 13;
$d = 10;


if((($a > $b) || ($a < $c )) && (($a == $c) || ($a >= $b))){
    echo "La expresion es VERDADERA";
}else{
    echo "La expresion es FALSA";
}
if((($a >= $b) || ($a < $d)) && (($a >= $d) && ($c > $d))){
    echo "La expresion es VERDADERA";
}else{
    echo "La expresion es FALSA";
} 
if(!($a == $c) && ($c > $b)){
    echo "La expresion es VERDADERA";
}else{
    echo "La expresion es FALSA";
}  