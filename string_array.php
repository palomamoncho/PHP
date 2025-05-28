<?php

$fecha1="2025/05/25";
$fecha2="2025-05-25";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode("/",$fecha1);
echo $array_fecha[2];

$array_fecha=explode("-",$fecha2);
echo $array_fecha[0];

$array_fecha=explode(" ",$numeros);
echo $array_fecha[5];