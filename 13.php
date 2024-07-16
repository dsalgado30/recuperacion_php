<?php

$hemoglobina = readline("Ingrese el nivel de hemoglobina: ");
$edad = readline("ingrese su edad: ");
$valor = readline("meses/anios: ");
$sexo = readline("hombre/mujer: ");

if ($edad > 0 and $edad <= 1 and $valor = "meses"){
    if ($hemoglobina > 13 and $hemoglobina < 26){
        echo "Estas dentro del rango etablecido, por tanto no tienes anemia";
    }
    else{
        echo "Eres positivo para anemia";
    }
}
elseif ($edad > 1 and $edad <= 6 and $valor = "meses"){
    if ($hemoglobina > 10 and $hemoglobina < 18){
        echo "Estas dentro del rango etablecido, por tanto no tienes anemia";
    }
    else{
        echo "Eres positivo para anemia";
    }
}
elseif ($edad > 6 and $edad <= 12 and $valor = "meses"){
    if ($hemoglobina > 11 and $hemoglobina < 15){
        echo "Estas dentro del rango etablecido, por tanto no tienes anemia";
    }
    else{
        echo "Eres positivo para anemia";
    }
}
elseif ($edad > 1 and $edad <= 5 and $valor = "anios"){
    if ($hemoglobina > 11.5 and $hemoglobina < 15){
        echo "Estas dentro del rango etablecido, por tanto no tienes anemia";
    }
    else{
        echo "Eres positivo para anemia";
    }
}
elseif ($edad > 5 and $edad <= 10 and $valor = "anios"){
    if ($hemoglobina > 12.6 and $hemoglobina < 15.5){
        echo "Estas dentro del rango etablecido, por tanto no tienes anemia";
    }
    else{
        echo "Eres positivo para anemia";
    }
}
elseif ($edad > 10 and $edad <= 15 and $valor = "anios"){
    if ($hemoglobina > 13 and $hemoglobina < 15.5){
        echo "Estas dentro del rango etablecido, por tanto no tienes anemia";
    }
    else{
        echo "Eres positivo para anemia";
    }
}
elseif ($edad > 15 and $valor = "anios" and $sexo = "mujer"){
    if ($hemoglobina > 12 and $hemoglobina < 16){
        echo "Estas dentro del rango etablecido, por tanto no tienes anemia";
    }
    else{
        echo "Eres positivo para anemia";
    }
}
elseif ($edad > 15 and $valor = "anios" and $sexo = "hombre"){
    if ($hemoglobina > 14 and $hemoglobina < 18){
        echo "Estas dentro del rango etablecido, por tanto no tienes anemia";
    }
    else{
        echo "Eres positivo para anemia";
    }
}
