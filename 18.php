<?php
// Función para dibujar un cuadrado de asteriscos
function dibujarCuadrado($tamano) {
    for ($i = 0; $i < $tamano; $i++) {
        for ($j = 0; $j < $tamano; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

// Función para dibujar un triángulo de asteriscos
function dibujarTriangulo($tamano) {
    for ($i = 1; $i <= $tamano; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

// Pedir al usuario que ingrese el tamaño de la figura
echo "Ingrese el tamaño de la figura: ";
$tamano = intval(trim(fgets(STDIN)));

// Pedir al usuario que ingrese la figura que desea dibujar
echo "Ingrese la figura que desea dibujar (cuadrado/triangulo): ";
$figura = strtolower(trim(fgets(STDIN)));

// Dibujar la figura seleccionada
if ($figura == "cuadrado") {
    dibujarCuadrado($tamano);
} elseif ($figura == "triangulo") {
    dibujarTriangulo($tamano);
} else {
    echo "Figura no reconocida. Por favor, ingrese 'cuadrado' o 'triangulo'.\n";
}
?>
