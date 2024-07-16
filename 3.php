<?php
// Solicitar al usuario que introduzca un número entero positivo de hasta tres cifras
$numero = intval(readline("Introduce un número entero positivo de hasta tres cifras:"));

// Verificar que el número es positivo y de hasta tres cifras
if ($numero > 0 && $numero <= 999) {
    // Convertir numero a string 
    $numeroStr = (string)$numero;
    // strlen() cuenta la longitud del numero
    $longitud = strlen($numeroStr);
    echo "El número tiene " . $longitud . " cifra(s).\n";
} else {
    echo "El número introducido no es válido. Debe ser un entero positivo de hasta tres cifras.\n";
}
?>