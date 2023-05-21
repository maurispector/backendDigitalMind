<?php 

$A = 33; 

$comparacion = !(($A > 10) && ($A < 20)) || !(($A > 10) || !($A < 20)) ;
if($comparacion){
    echo "la expresion es verdadera";
}else{
    echo "la expresion es falsa";
} 
?>