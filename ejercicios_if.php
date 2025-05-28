<?php
//Ejercicio 1
$edad=20;
if($edad>=18) :
    echo "Eres mayor de edad<br>";
endif;

//Ejercicio 2
$total=120;

if($total>100) {
    $total=$total-($total*0.20);
}
echo "El total a pagar es de: $ .$total";