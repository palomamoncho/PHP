<?php

$contrasena="PepitiGrillo22";

$contrasena_procesada=password_hash($contrasena,PASSWORD_BCRYPT,["cost"=>11]);

$contrasena2="123456789";

/*echo md5($contrasena);

foreach ($hash_algos as $algoritmos) {
    echo $algoritmos. "<br>";
}*/

if(password_verif($contrasena,$contrasena_procesada)){
    echo "Las contraseñas coinciden";
}else{
    echo "LAs contraseñas NO coinciden";
}