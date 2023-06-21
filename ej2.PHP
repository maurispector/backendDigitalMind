<?PHP

$nota = readline( "ingrese nota: ");
$carrera = readline( "ingrese carrera: ");
if ($carrera == "Vespertina") {
    if ($nota >= 6) {
        echo "Exime";
    } elseif ($nota >= 3.5) {
        echo "Rinde examen";
    } else { 
        echo "Reprueba";
    }
}if ($carrera == "Matutina") {
    if ($nota >= 6) {
        echo "Exime";
    } elseif ($nota >= 3.5) {
        echo "Rinde examen";
    } else { 
        echo "Reprueba";
    }

}