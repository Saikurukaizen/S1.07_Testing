<?php

const nombre = "Me llamo Marc";
echo '<h1>Hola. '.nombre.'</h1>';

$numero = 2;
$double = 3.195195195348;
$string = "Cacahuetes";
$boolean = true;

$imp = 'Hello, World!';
echo $imp;
$impr = $imp;
if($imp = true){
    echo strtoupper($impr);
    echo strlen($impr);
    echo strrev($impr);
}

echo 'Los 4 valores son: '.$numero.','.$double.','.$string.' y '.$boolean.'. Gracias. ';
echo 'Te lo repito: Son: '.$imp.','.$impr.','.strlen($impr).' y '.strrev($impr).' Gracias';

$x = 1;
$y = 2;

$n= 1.3;
$m =2.5;

$suma = $x + $y;
$suma2 = $n + $m;

$resta = $x - $y;
$resta2 = $n - $m;

$multi = $x * $y;
$multi2 = $n * $m;

$div = $x / $y;
$div2 = $n / $m;

$var = [$x,$y,$n,$m];
while($var){
    echo 'El doble de '.$x.'es: '.$x*2;
    echo 'El doble de '.$y.'es: '.$y*2;
    echo 'El doble de '.$n.'es: '.$n*2;
    echo 'El doble de '.$m.'es: '.$m*2;
    break;
}

$SumTotal = $suma + $suma2;
echo 'La suma total es: '.$SumTotal;

$MultiTotal = $multi + $multi2;
echo 'La multiplicación total es: '.$MultiTotal;


$num1 = 5;
$num2 = 8;
$operador = ['+','-','*','/'];

function Calculadora($num1,$num2,$operador){
    switch($operador){
        case '+':
            return $num1 + $num2;
            echo 'La suma es: '.$sum1 + $sum2;
            break;
        case '-':
            echo $num1 - $num2;
            break;
        case '*':
            echo $num1 * $num2;
            break;
        case '/':
            echo $num1 / $num2;
            break;
        case $num2 == 0:
            echo 'No se puede dividir por 0';
            break;
        default:
            echo 'El operador no es válido';
    }
}

$n = 0;
function Cuenta($n){
    while($n < 10){
        echo $n;
        $n++;
    }
}
function contar($limite, $pas = 1){
    $i = 0;
    while($i <= $limite){
        echo $i;
        $i += $pas;
    }
}

$limit = 10;
$pas = 1;
$i = 0;
function Contemos($limit, $pas){
    for($i = 0; $i < $limit; $i+= $pas){
        echo $i;
    }
}
Cuenta(5,1);
Contar(10,1); 
Contar(20,2);
Contemos(20,1);
    


Calificacion(0.60);
Calificacion(0.45);
Calificacion(0.33);
Calificacion(0.15);
function Calificacion($nota){
    if($nota >= 0.60){
        echo 'Ets Primera Divisió';
    }
    elseif($nota >= 0.45 && $nota < 0.60){
        echo 'Ets Segona Divisió';
    }
    elseif($nota >= 0.33 && $nota < 0.45){
        echo 'Ets Tercera Divisió';
    }
    elseif($nota < 0.33){
        echo 'Per reprovar';
    }
    else{
        echo 'No es pot calcular la nota';
    }
}

isBitten();
function isbitten(){
    $dedo = rand(0,1);
    if($dedo == 1){
        echo 'Charlie em va mossegar el dit!';
    }
    else{
        echo 'Charlie no em va mossegar el dit!';
    }
}


?>