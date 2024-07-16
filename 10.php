<?php
// Solicitar al usuario que ingrese su sexo y edad
$sexo = readline("Ingrese su sexo (F para femenino, M para masculino): ");
$edad = intval(readline("Ingrese su edad: "));

$num_pulsaciones = 0;

// Calcular las pulsaciones según el sexo
if ($sexo === 'F') {

    // Fórmula femenino num. pulsaciones = (220 - edad) /10
    $num_pulsaciones = (220 - $edad) / 10;
    // Mostrar el resultado
    echo "Genero Femenino \n" ;
    echo "Número de pulsaciones por cada 10 segundos: " . $num_pulsaciones . "\n";

} elseif ($sexo === 'M') {

    // Fórmula masculino  num. pulsaciones = (210 - edad)/10
    $num_pulsaciones = (210 - $edad) / 10;
    // Mostrar el resultado
    echo "Genero Masculino \n" ;
    echo "Número de pulsaciones por cada 10 segundos: " . $num_pulsaciones . "\n";

} else {
    // Mensaje de error si el sexo no es válido
    echo "Sexo ingresado no válido. Use F o M.";
}
?>
