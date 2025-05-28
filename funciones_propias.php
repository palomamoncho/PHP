<?php

function saludo(){
    echo "Hola, mi nombre es: Paloma";
}
saludo();

// Ejemplo

function promedio_alumno($nota,$nota2,$nota3){
    $promedio=($nota+$nota2+$nota3)/3;
    return $promedio;
}
$promedio=$promedio_alumno(2,8,9);
echo "El promedio es: .$promedio";