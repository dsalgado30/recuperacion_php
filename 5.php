<?php
// Solicitar al usuario que ingrese las coordenadas x e y

$x = intval(readline("Ingresa la coordenada x: "));
$y = intval(readline("Ingresa la coordenada y: "));

// Determinar en qué cuadrante se encuentra el punto
// 1º Cuadrante si x > 0 Y y > 0
if ($x > 0 && $y > 0) {
    echo "El punto ($x, $y) está en el 1er Cuadrante.\n";
} 
// 2º Cuadrante: x < 0 Y y > 0
elseif ($x < 0 && $y > 0) {
    echo "El punto ($x, $y) está en el 2do Cuadrante.\n";
}
// 3º Cuadrante: x < 0 Y y < 0
elseif ($x < 0 && $y < 0) {
    echo "El punto ($x, $y) está en el 3er Cuadrante.\n";
} 
// 4º Cuadrante: x > 0 Y y < 0
elseif ($x > 0 && $y < 0) {
    echo "El punto ($x, $y) está en el 4to Cuadrante.\n";
} 
//Validar si esta sobre el Eje Y
elseif ($x == 0 && $y != 0) {
    echo "El punto ($x, $y) está sobre el eje Y.\n";
} 
//Validar si esta sobre el Eje X
elseif ($x != 0 && $y == 0) {
    echo "El punto ($x, $y) está sobre el eje X.\n";
} 
// Esta en el origen
else {
    echo "El punto ($x, $y) está en el origen.\n";
}
?>