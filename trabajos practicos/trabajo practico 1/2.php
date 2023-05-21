<?php

$A = 1.0 ;
$B = 3.0 ;
$C = 4.0 ;

$G = ( 2 * $A - $B /sqrt($C)) / ($C + 1 / $B) * ($B / 4);
echo $G;