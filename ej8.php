8. En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor
de la compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es de
color blanco no se le hará descuento alguno, si es verde se le hará un 10% de descuento, si es
amarilla un 25%, si es azul un 50% y si es anaranjada un 100%. Determinar la cantidad final que el
cliente deberá pagar por su compra si se sabe que solo hay bolitas de los colores mencionados.

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <form action="tp2ej8.php" method="get">
        Precio del producto: $<input type="number" name="precio" value=""> <br>
        <input type="radio" name="bola" value="Blanco"> <br>
        <input type="radio" name="bola" value="Amarillo"> <br>
        <input type="radio" name="bola" value="Azul"> <br>
        <input type="radio" name="bola" value="Naranja"> <br>
        <input type="radio" name="bola" value="Verde"> <br>

        <input type="submit">
    </form>
    <?php 
    switch ($_GET['bola']){
        case "Blanco":
            echo "Usted no posee ningun descuento ";
            $precio = $_GET['precio'];
            break;
        case "Amarillo": 
            echo "Usted tiene un descuento del 25% de su compra";
            $precio = $_GET['precio'] * 0.75;
            break;
        case "Azul":
            echo "Usted tiene un descuento del 50% de su compra";
            $precio = $_GET['precio'] * 0.5;
            break;    
        case "Naranja":
            echo "Usted tiene un descuento del 100% de su compra";
            $precio = $_GET['precio'] * 0; 
            break;
        case "Verde":
            echo "Usted tiene un descuento del 10% de su compra";
            $precio = $_GET['precio'] * 0.9;
            break;
        default:
            echo "Debe seleccionar un color";
            break;
    }
    echo "<br> El precio final es: $ $precio";
    ?>
</body>

</html>