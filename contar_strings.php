<?php

$cadena_texto="hola mundo";

$longitud=strlen($cadena_texto); //Cuenta los carcateres

echo $cadena_texto. " tiene " .$longitud. "caracteres <br>";

$palabras=str_word_count($cadena_texto);//Cuenta las palabras
echo $cadena_texto. " tiene " .$palabras. "caracteres <br>";