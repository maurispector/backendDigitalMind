<?php
$M = 8;
$N = 9;
$R = 5;
$S = 5;
$T = 4;
$V = 77;

if(!(($M > $N && $R > $S) && !($T > $V && $S > $M))){
    echo "La epresion es verdadera";
}else{
    echo "La expresion es falsa";
}