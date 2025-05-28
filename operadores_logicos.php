<?php
$valor_1=7;
$valor_2=2;

//Ejemplo 1 AND
var_dump($valor_1==7 && 2>3);

//Ejemplo 2
var_dump($valor_1==7 && 4>3);

//Ejemplo 3 OR
var_dump($valor_1==7 || 4>3);

//Ejemplo 4
var_dump($valor_1==8 || 1>3 || $valor_2>10);

//Ejemplo 5 NOT
var_dump(!($valor_1==$valor_2));