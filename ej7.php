<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <form action="tp2ej7.php" method="get">
        Tipo de enfermedad del paciente: <br>
        <input type="number" name="tipoEnfermedad"> <br>
        Cantidad de dias que el paciente estuvo internado: <br>
        <input type="number" name="dias"> <br>
        <input type="submit">
    </form>
    <br>
    <?php 
    $tipoEnfermedad = $_GET['tipoEnfermedad'];
    $dias = $_GET['dias'];
    switch ($tipoEnfermedad) {
        case 1: 
            echo "El costo total del paciente es: $" . 125 * $dias;
        case 2:
            echo "El costo total del paciente es: $" . 116 * $dias;
        case 3:
            echo "El costo total del paciente es: $" . 120 * $dias;
        case 4:
            echo "El costo total del paciente es: $" . 132 * $dias;
        case 5: 
            echo "El costo total del paciente es: $" . 138 * $dias;
            break;
        default:
            echo ($tipoEnfermedad) ? "El tipo de enfermedad ingresado no es válido" : "No se ingresó ningún tipo de enfermedad";
            break;

    }
?>

</body>

</html>