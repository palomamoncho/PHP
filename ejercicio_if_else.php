<?php

//Ejercicio 1
$cantidad=4;
if($cantidad<5) {
    $total=$cantidad*800;
}else{
    $total=$cantidad*700;
}
echo "El total a pagar es de $ $total<br>";

//Ejercicio 2

$calificacion1=5;
$calificacion2=6;
$calificacion3=4;

$promedio=($calificacion1+$calificacion2+$calificacion3)/3;

if($promedio>=5) {
    echo"El estudiante aprobó con calificación: $promedio";
}else{
    echo"El estudiante no aprobó con calificación: $promedio";
}