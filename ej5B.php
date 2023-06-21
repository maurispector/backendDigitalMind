<?php



$dia = readline('Ingrese el dia: ');
$mes = readline('Ingrese el mes: ');
$anio = readline('Ingrese el dia: ');

if($dia > 0 && $dia<32) {
    if($anio>2000){
        switch($mes){
            case 1:$mes="Enero"; break;
            case 2:$mes="Febrero"; break;
            case 3:$mes="Marzo"; break;
            case 4:$mes="Abril"; break;
            case 5:$mes="Mayo"; break;
            case 6:$mes="Junio"; break;
            case 7:$mes="Julio"; break;
            case 8:$mes="Agosto"; break;
            case 9:$mes="Septiembre"; break;
            case 10:$mes="Octubre"; break;
            case 11:$mes="Noviembre"; break;
            case 12:$mes="Diciembre"; break;

        }echo "$dia-$mes-$anio";
    }else {
        echo "Año erroneo";
    }
}else {
    echo "dia erroneo";
}