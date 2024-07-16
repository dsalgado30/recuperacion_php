<?php
// Solicitar al usuario que ingrese el monto total de la compra
$monto_compra = floatval(readline("Ingrese el monto total de la compra: "));

// Definir constantes
$limite_superior = 500000; //  $500.000
$porcentaje_banco = 0.30; // 30%

$porcentaje_propio = 0;
$porcentaje_credito = 0;

// Calcular porcentajes según el caso mayor a $500,000
if ($monto_compra > $limite_superior) {
    $porcentaje_propio = 0.55; // 55%
    $porcentaje_credito = 1 - $porcentaje_propio - $porcentaje_banco; //15%
}
// Calcular porcentajes según el caso menor o igual a $500,000
else { 
    $porcentaje_propio = 0.70; // 70%
    $porcentaje_credito = 1 - $porcentaje_propio; // 30%
}

// Calcular montos 
$propio = $porcentaje_propio * $monto_compra;
$credito_fabricante = $porcentaje_credito * $monto_compra;
// Calcular intereses del fabricante
$intereses_fabricante = 0.20 * $credito_fabricante;


// Determinar cómo se realizará el pago según el monto
if ($monto_compra > $limite_superior) {
    // Calcular montos según el caso mayor a $500,000
    $banco = $porcentaje_banco * $monto_compra;
    // Mostrar resultados
    echo "--El monto de la compra excede los $500.000-- \n";
    echo "La empresa invertirá de su propio dinero: $" . $propio . "\n";
    echo "La empresa pedirá prestado al banco: $" . $banco . "\n";
    echo "La empresa solicitará crédito al fabricante: $" . $credito_fabricante . "\n";
    echo "Intereses que cobrará el fabricante: $" . $intereses_fabricante . "\n";
} else {
    // Calcular montos según el caso menor o igual a $500,000
    // Mostrar resultados
    echo "--El monto de la compra no excede los $500.000--\n";
    echo "La empresa invertirá  de su propio dinero: $" . $propio . "\n";
    echo "La empresa solicitará crédito al fabricante: $" . $credito_fabricante . "\n";
    echo "Intereses que cobrará el fabricante: $" . $intereses_fabricante . "\n";
}
?>
