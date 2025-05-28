<?php

$c=1;
while($c<=20) {
    echo $c. "<br>";
    if($c==10){
        break;
    }
    $c++;
}

// Ejemplo 1

$pc=["SO","SSD","GPU","RAM","CPU"];
foreach($pc as $componente){
    echo $componente. "<br>";
    if($componente=="GPU"){
        break;
    }
}

// Ejemplo 2

for($i=1; $i<=10; $i++){
    if($i==5){
        continue;
    }
    echo $i. "<br>";
    $i++;
}