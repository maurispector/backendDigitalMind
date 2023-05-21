<?php
/* Leer  un valor de Dia, Mes, Año de una fecha  ( ej. 10-5-2003). Mostrar la fecha con el respectivo nombre del mes (ej. 10 - MAYO - 2003). Si el numero leido para el mes no esta entre 1 y 12 imprimir un mensaje de error. Comprobar que el dia se encuentre entre 1 y 31 y el año sea mayor que 2000.
*/

$dia = readline( "ingrese dia: ");
$mes = readline( "ingrese mes: ");
$anio = readline( "ingrese año:");

if ($dia >= 1 && $dia <= 31 && $mes > 0 && $mes < 13 && $anio > 2000) {
 switch ($mes) {
    case 1:
        echo "$dia-Enero-$anio";
        break;
    case 2:
        echo "$dia-Febrero-$anio";
        break;
    case 3:
        echo "$dia-Marzo-$anio";
        break;
    case 4:
        echo "$dia-Abril-$anio";
        break;
    case 5:
        echo "$dia-Mayo-$anio";
        break;
    case 6:
        echo "$dia-Junio-$anio";
        break;
    case 7:
        echo "$dia-Julio-$anio";
        break;
    case 8:
        echo "$dia-Agosto-$anio";
        break;
    case 9:
        echo "$dia-Setiempre-$anio";
        break;
    case 10:
        echo "$dia-Octubre-$anio";
        break;
    case 11:
        echo "$dia-Noviembre-$anio";
        break;
    case 12:
        echo "$dia-Diciembre-$anio";
        break;
    }
} else {
    echo "Datos de la fecha invalida.";
}