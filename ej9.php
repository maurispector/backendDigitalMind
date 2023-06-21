<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <form action="tp2ej9.php" method="get">
        ingrese nombre <input type="text" name="name" id=""> <br>
        ingrese nota <input type="number" name="nota" id=""><br>

        <input type="submit" value="enviar">
    </form>
    <?php 
$nota = $_GET['nota'];
$nombre = $_GET['name'];
if (isset($nombre)){
    switch ($nota){
        case 10: 
            echo "$nombre, Su nota es: $nota, Su calificación es Sobresaliente ";
            break;
        case 9:
        case 8:
            echo "$nombre, Su nota es: $nota, Su calificación es Distinguido";
            break;
        case 7:
        case 6:
            echo "$nombre, Su nota es: $nota, Su calificación es Bueno ";
            break;
        case 5:
        case 4: 
            echo "$nombre, Su nota es: $nota, Su calificación es Suficiente";
        case 3:
        case 2:
            echo "$nombre, Su nota es: $nota, Su calificación es Insuficiente";
            break;
        case 1:
        case 0:
            echo "$nombre, Su nota es: $nota, Su calificación es Reprobado";
            break;
        default:
            echo "Ingrese una nota válida";
            break;                     

            
    }
}
?>

</body>

</html>