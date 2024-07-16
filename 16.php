<?php
$text = "Este es un ejemplo. Este es otro ejemplo, y otro ejemplo más.";

// Convertir texto a minúsculas manualmente
$lowerText = '';
for ($i = 0; $i < strlen($text); $i++) {
    $char = $text[$i];
    if ($char >= 'A' && $char <= 'Z') {
        $lowerText .= chr(ord($char) + 32);
    } else {
        $lowerText .= $char;
    }
}

// Eliminar manualmente los signos de puntuación
$cleanText = '';
for ($i = 0; $i < strlen($lowerText); $i++) {
    $char = $lowerText[$i];
    if (($char >= 'a' && $char <= 'z') || $char == ' ' || ($char >= '0' && $char <= '9')) {
        $cleanText .= $char;
    }
}

// Separar palabras manualmente y contarlas
$words = [];
$currentWord = '';
for ($i = 0; $i < strlen($cleanText); $i++) {
    $char = $cleanText[$i];
    if ($char == ' ') {
        if ($currentWord != '') {
            if (!isset($words[$currentWord])) {
                $words[$currentWord] = 0;
            }
            $words[$currentWord]++;
            $currentWord = '';
        }
    } else {
        $currentWord .= $char;
    }
}
if ($currentWord != '') {
    if (!isset($words[$currentWord])) {
        $words[$currentWord] = 0;
    }
    $words[$currentWord]++;
}

// Mostrar los resultados
foreach ($words as $word => $count) {
    echo "La palabra '$word' se repite $count veces.\n";
}
?>
