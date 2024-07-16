<?php
// Solicitar al usuario que ingrese el sueldo y los años de antigüedad
$sueldo = floatval(readline("Ingrese el sueldo del operario: "));
$antiguedad = intval(readline("Ingrese los años de antigüedad del operario: "));

// Definir los incrementos porcentuales para los aumentos
$incremento1 = 20; // 20% de aumento
$incremento2 = 5; // 5% de aumento

// Aplicar las condiciones y calcular el sueldo a pagar
if($sueldo >= 500){
    echo "Sueldo a pagar sin cambios: $sueldo\n";
}else{
    // Antiguedad mayor a 10 
    if ($antiguedad >= 10) {
        // Caso a: Aumento del 20%
        $aumento = $sueldo * ($incremento1 / 100); //Operacion para Calcular aumento del 20 %
        $sueldo_pagar = $sueldo + $aumento; // Sumar el sueldo con el aumento
        echo "Sueldo a pagar con aumento del 20%: $sueldo_pagar\n";
    } 
    // Antiguedad menor a 10 
    else {
        // Caso b: Aumento del 5%
        $aumento = $sueldo * ($incremento2 / 100); //Operacion para Calcular aumento del 5 %
        $sueldo_pagar = $sueldo + $aumento; // Sumar el sueldo con el aumento
        echo "Sueldo a pagar con aumento del 5%: $sueldo_pagar\n";
    }
}
?>