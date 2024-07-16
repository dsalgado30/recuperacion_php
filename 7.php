<?php
// Solicitar al usuario que ingrese la cantidad en metros
$cantidad_metros = floatval(readline("Ingrese la cantidad en metros: "));

// Mostrar opciones al usuario
echo "Elija la unidad a la cual convertir:\n";
echo "1) Centímetros\n";
echo "2) Kilómetros\n";
echo "3) Pulgadas\n";
$opcion = intval(readline("Opción: "));

// Definir constantes para las conversiones
$centimetros_por_metro=100;
$kilometro_por_metro=0.001;
$pulgada_por_metro=39.3701;

// Inicializar variable para almacenar el resultado de la conversión
$resultado = 0;

// Realizar la conversión según la opción elegida
switch ($opcion) {
    case 1:
        // Convertir a centímetros
        $resultado = $cantidad_metros * $centimetros_por_metro;
        echo "$cantidad_metros metros equivale a $resultado centímetros.\n";
        break;
    case 2:
        // Convertir a kilómetros
        $resultado = $cantidad_metros * $kilometro_por_metro;
        echo "$cantidad_metros metros equivale a $resultado kilómetros.\n";
        break;
    case 3:
        // Convertir a pulgadas
        $resultado = $cantidad_metros * $pulgada_por_metro;
        echo "$cantidad_metros metros equivale a $resultado pulgadas.\n";
        break;
    default:
        echo "Opción inválida. Por favor, elija una opción válida del 1 al 3.\n";
}
?>
