<?php

$laptop=["Acer Nitro 5", "Windows 11", "AMD Ryzen 5 4600H", "SSD 256 GB", "RAM 24GB"];

$frutas=[
    "Fresas"=>100,
    "Peras"=>30,
    "Sandias"=>10,
    "Melocotones"=>17,
    "Manzanas"=>9
];

foreach($laptop as $clave =>$valor){
    echo $clave. " -" .$valor."<br>";
}

// Ejemplo 2


foreach($frutas as $clave =>$valor){
    echo "Hay ".$valor." ".$clave. "en el inventario"."<br>";
}

// Ejemplo 3 el más usado actualmente

$productos = [
    ["código" => "A001", "descripción" => "Mouse"],
    ["código" => "A002", "descripción" => "Teclado"],
    ["código" => "A003", "descripción" => "Monitor"],
    ["código" => "A004", "descripción" => "Impresora"]
];

foreach($productos as $prod){
    echo $prod["código"]. "<br>";
};