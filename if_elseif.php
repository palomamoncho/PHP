<?php

//Ejemplo 1

$dia=0;

if($dia==01){
    echo"Lunes";
}elseif($dia==2){
    echo"Martes";
}elseif($dia==3){
    echo"Miércoles";
}elseif($dia==4){
    echo"Jueves";
}elseif($dia==5){
    echo"Viernes";
}elseif($dia==6){
    echo"Sábado";
}elseif($dia==7){
    echo"Domingo";
}else{
    echo "Error ha introducido un valor no válido";
}