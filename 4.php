<?php
// Solicitar el nombre del postulante
$nombre = readline("Introduce el nombre del postulante: ");

// Solicitar la cantidad total de preguntas
$total_preguntas = intval(readline( "Introduce la cantidad total de preguntas: "));

// Solicitar la cantidad de preguntas respondidas correctamente
$preguntas_correctas = intval(readline("Introduce la cantidad de preguntas contestadas correctamente: "));

// Calcular el porcentaje de respuestas correctas
$porcentaje = ($preguntas_correctas / $total_preguntas) * 100;

$nivel="";

// Determinar el nivel del postulante basado en el porcentaje
// Nivel superior: Porcentaje>=90%.
if ($porcentaje >= 90) {
    $nivel = "Nivel superior";
} 
// Nivel medio: Porcentaje>=75% y <90%.
elseif ($porcentaje >= 75 && $porcentaje < 90) {
    $nivel = "Nivel medio";
} 
// Nivel regular: Porcentaje>=50% y <75%.
elseif ($porcentaje >= 50 && $porcentaje < 75) {
    $nivel = "Nivel regular";
} 
// Fuera de nivel: Porcentaje<50%
//elseif($porcentaje < 50){
else {
    $nivel = "Fuera de nivel";
}

// Mostrar los resultados
echo "==================RESULTADO=========================\n";
echo "Nombre del postulante: " . $nombre . "\n";
echo "Cantidad total de preguntas: " . $total_preguntas . "\n";
echo "Cantidad de preguntas contestadas correctamente: " . $preguntas_correctas . "\n";
echo "Porcentaje de respuestas correctas: " . $porcentaje . "%\n";
echo "Nivel del postulante: " . $nivel . "\n";
?>