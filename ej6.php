<?php

$dia = readline('Ingrese el dia: ');
$mes = readline('Ingrese el mes: ');


if ($dia>0 && $dia < 32) {
    echo " Su signo es: ";
    switch ($mes) {
        case 1: echo ($dia<20) ? "Capricornio" : "Acuario"; Break;
        case 2: echo ($dia<21) ? "Acuario" : "Piscis"; Break;
        case 3: echo ($dia<20) ? "Piscis" : "Aries"; Break;
        case 4: echo ($dia<21) ? "Aries" : "Tauro"; Break;
        case 5: echo ($dia<21) ? "Tauro" : "Geminis"; Break;
        case 6: echo ($dia<23) ? "Geminis" : "Cancer"; Break;
        case 7: echo ($dia<23) ? "Cancer" : "Leo"; Break;
        case 8: echo ($dia<23) ? "Leo" : "Virgo"; Break;
        case 9: echo ($dia<23) ? "Virgo" : "Escorpio"; Break;
        case 10: echo ($dia<22) ? "Escorpio" : "Sagitario"; Break;
        case 11
        : echo ($dia<22) ? "Sagitario" : "Capricornio"; Break;
        echo "mes incorrecto";
    }
}else {
    echo "dia erroneo";
}


    