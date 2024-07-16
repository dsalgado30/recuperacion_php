<?php
// Solicitar al usuario que introduzca el primer número
$numero1 = intval(readline("Introduce el primer número:"));

// Solicitar al usuario que introduzca el segundo número
$numero2 = intval(readline("Introduce el segundo número:"));


// Comparar los números y realizar las operaciones correspondientes
if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $diferencia = $numero1 - $numero2;
    echo "El primer número es mayor al segundo.\n";
    echo "La suma de los dos números es: " . $suma . "\n";
    echo "La diferencia de los dos números es: " . $diferencia . "\n";
} else {
    $producto = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "El segundo número es mayor al primero.\n";
    echo "El producto de los dos números es: " . $producto . "\n";
    echo "La división del primero respecto al segundo es: " . $division . "\n";
}
?>