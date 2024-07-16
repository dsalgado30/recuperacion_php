<?php
$binario = readline("Ingrese un número binario: ");

function binarioadecimal ($binario) {
    $decimal = 0;
    $cantidad = strlen($binario); // Obtener la longitud de la cadena binaria
    
    // Recorre cada dígito del número binario
    for ($i = 0; $i < $cantidad; $i++) {

        $digito = $binario[$cantidad - $i - 1]; // En este se obtiene el numero segun su posicion

        if ($digito == '1') {
            // Si el dígito es '1', sumar 2^i al decimal
            $valor = 1;

            for ($posi=0;$posi<$i;$posi++){
                $valor *=2;
            }
            $decimal += $valor;
        }
    }
    
    return $decimal;
}

// Ejemplo de uso

$decimal = binarioadecimal($binario);
echo "El numero $binario es $decimal en decimal";
?>