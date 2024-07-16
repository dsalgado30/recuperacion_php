<?php
// Definir el valor de PI en una variable
$pi = 3.1416;

// Solicitar al usuario que introduzca el rad y convertirlo a entero
$radio = intval(readline("ingrese el valor del radio: "."\n"));

// Calcular el perímetro de la circunferencia
// perimetro = 2*pi*r
$perimetro = 2 * $pi * $radio;

// Calcular el área del círculo
//pow se utiliza para calcular una potencia EJ: pow(base, exponente) - Calcula la potencia de base elevada a exponente
//área del círculo (pi*r2)
$area = $pi * pow($radio, 2);

// Calcular el volumen de la esfera
// V = 4*pi*r3 /3
$volumen = (4/3) * $pi * pow($radio, 3);

// Mostrar los resultados
echo "Perímetro de la circunferencia: " . $perimetro . "\n";
echo "Área del círculo: " . $area . "\n";
echo "Volumen de la esfera: " . $volumen . "\n";
?>