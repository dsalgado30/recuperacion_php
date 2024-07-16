<?php
$morseToText = [
    ".-" => "A", "-..." => "B", "-.-." => "C", "-.." => "D", "." => "E",
    "..-." => "F", "--." => "G", "...." => "H", ".." => "I", ".---" => "J",
    "-.-" => "K", ".-.." => "L", "--" => "M", "-." => "N", "---" => "O",
    ".--." => "P", "--.-" => "Q", ".-." => "R", "..." => "S", "-" => "T",
    "..-" => "U", "...-" => "V", ".--" => "W", "-..-" => "X", "-.--" => "Y",
    "--.." => "Z", "-----" => "0", ".----" => "1", "..---" => "2", "...--" => "3",
    "....-" => "4", "....." => "5", "-...." => "6", "--..." => "7", "---.." => "8",
    "----." => "9"
];

$textToMorse = array_flip($morseToText);

function convertTextToMorse($text, $textToMorse) {
    $text = strtoupper($text);
    $result = [];
    foreach (str_split($text) as $char) {
        if (isset($textToMorse[$char])) {
            $result[] = $textToMorse[$char];
        } else {
            $result[] = " ";
        }
    }
    return implode(" ", $result);
}

function convertMorseToText($morse, $morseToText) {
    $result = [];
    foreach (explode(" ", $morse) as $symbol) {
        if (isset($morseToText[$symbol])) {
            $result[] = $morseToText[$symbol];
        } else {
            $result[] = " ";
        }
    }
    return implode("", $result);
}

function detectAndConvert($input, $textToMorse, $morseToText) {
    if (strpos($input, ".") !== false || strpos($input, "-") !== false) {
        return convertMorseToText($input, $morseToText);
    } else {
        return convertTextToMorse($input, $textToMorse);
    }
}

// Ejemplo de uso:
$input = "Hola Mundo"; // Cambia esta línea para probar con diferentes entradas
echo detectAndConvert($input, $textToMorse, $morseToText);
?>
