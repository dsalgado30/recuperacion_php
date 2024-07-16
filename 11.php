<?php
$inversion=intval(readline("ingrese el valor total de la inversión del negocio"."\n"));

{
$hipoteca=intval(readline("ingrese el monto de la hipoteca"."\n"));

if ($hipoteca<1000000){
    $socio3=($inversion*0.5);
    echo"a cada socio le corresponde un valor de".$socio3;

}if ($hipoteca>=1000000){
     $socio1=($hipoteca+($inversion-$hipoteca));
        $socio2=(($inversion-$hipoteca)/2);
        
    };
    echo "el socio de la hipoteca debe aportar"." ".$socio1."\n";
    
    echo "el otro socio debe aportar"." ".$socio2."\n";
}


















?>