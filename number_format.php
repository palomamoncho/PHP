<?php

$cantidad1=12732.77;
$cantidad2=1931.81;

//number_format(cantidad,decimales,sep_decimal,sep_millar);

$cantidad1=number_format($cantidad1,2,",",".");
echo $cantidad1;