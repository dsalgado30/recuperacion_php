<?php
// Solicitar al usuario que ingrese la cantidad inicial de inversión
$cantidad_inversion = floatval(readline("Ingrese la cantidad de inversión en el banco: "));

// Solicitar al usuario que ingrese la tasa de interés anual
$tasa_interes = floatval(readline("Ingrese la tasa de interés anual (%): "));

// Calcular los intereses
$intereses = $cantidad_inversion * ($tasa_interes / 100);

// Mostrar los intereses generados
echo "Intereses generados por la inversión: $" . $intereses . "\n";

// Verificar si los intereses exceden los $7000
if ($intereses > 7000) {
    // Calcular el saldo final después de reinvertir los intereses
    $cantidad_final = $cantidad_inversion + $intereses;
    echo "Después de reinvertir los intereses, tendrá en su cuenta: $" . $cantidad_final . "\n";
} else {
    echo "No se reinvertirán los intereses porque no exceden los $7000.\n";
}
?>