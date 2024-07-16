<?php 

$num=intval(readline("Ingrese un numero: "));
$primo=[];
$cont=0;


for($i=1;$i<$num;$i++){

    if ($num % $i == 0){
        $cont= $cont+1;
    }
}

if($cont == 2){
    echo "Es un numero primo";

}
else{
    echo "No es un numero primo";
}

for($numero=1;$numero<=100;$numero++){ // Con este va recorrer todos los numeros del 1 al 100
    $cont2=0;
    for($pri=1;$pri<=$numero;$pri++){ // y aqui los verifica si son primos
        if($numero % $pri == 0){
            $cont2++;
        }
    }
    if ($cont2 == 2){
        $primo[]=$numero;
    }
}

echo "Los numeros primos del 1 al 100 son :"."\n";

foreach ($primo as $prim){
    echo $prim."\n";
}

?>