<?php
function planificarDecisiones($capitalActual){
    $prestamo = 0;
    $equipoComputo = 5000;
    $mobiliario = 2000;
    $insumos = 0;
    $incentivosPersonal = 0;
    
    if ($capitalActual < 0) {
        // Si el capital es negativo, pedirá préstamo para alcanzar $10,000
        $prestamo = 10000 - $capitalActual;
    } elseif ($capitalActual > 0 && $capitalActual < 20000) {
        // Si el capital es positivo pero menor a $20,000, pedirá préstamo para alcanzar $20,000
        $prestamo = 20000 - $capitalActual;
    }
    
    // Calcular presupuesto restante después de recibir préstamo (si aplica)
    $presupuestoRestante = $capitalActual + $prestamo - $equipoComputo - $mobiliario;
    
    if ($presupuestoRestante > 0) {
        // Calcular la mitad del presupuesto restante para insumos y la otra mitad para incentivos al personal
        $insumos = $presupuestoRestante / 2;
        $incentivosPersonal = $presupuestoRestante / 2;
    }
    
    // Mostrar resultados
    echo "Cantidad para compra de insumos: $" . number_format($insumos, 2) . "\n";
    echo "Cantidad para incentivos al personal: $" . number_format($incentivosPersonal, 2) . "\n";
    
    // Mostrar cantidad de préstamo solicitado, si es que se solicitó alguno
    if ($prestamo > 0) {
        echo "Se solicitará un préstamo de: $" . number_format($prestamo, 2) . "\n";
    }
}

// Ejemplo de uso con diferentes valores de capital actual
$capital1 = -5000; // Ejemplo de capital negativo
$capital2 = 15000; // Ejemplo de capital positivo pero menor a $20,000
$capital3 = 25000; // Ejemplo de capital mayor a $20,000

echo "Para capital actual de $" . number_format($capital1, 2) . ":\n";
planificarDecisiones($capital1);

echo "\nPara capital actual de $" . number_format($capital2, 2) . ":\n";
planificarDecisiones($capital2);

echo "\nPara capital actual de $" . number_format($capital3, 2) . ":\n";
planificarDecisiones($capital3);

?>
