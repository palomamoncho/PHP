<?php

$fruta = "Fresa";

switch($fruta){
    case "Fresa";
        echo "Eres una fresa";
    break;
    case "Pera";
        echo "Eres una pera";
    break;
    default:
        echo "No eres ni fresa ni pera";
}

//Ejemplo 2

$dia = 25;

switch($dia) {
    case "1";
        echo "Lunes";
    break;
    case "2";
        echo "Martes";
    break;
    case "3";
        echo "Miercoles";
    break;
    case "4";
        echo "Jueves";
    break;
    case "5";
        echo "Viernes";
    break;
    case "6";
        echo "Sábado";
    break;
    case "7";
        echo "Domingo";
    break;
    default:
    echo "Introduce un valor valido";
}