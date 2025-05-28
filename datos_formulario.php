<?php

/*$nombre=$_POST['nombre'];
$asignatura=$_POST['asignatura'];
$frutas=$_POST['frutas'];

echo $nombre." - " .$asignatura. " - " .$frutas;*/

var_dump($_POST['asignatura']);

$materias=$_POST['asignatura'];
foreach($materias as $asignatura){
    echo $asignatura. "<br>";
};

echo "<br>";
echo "<br>";
echo "<br>";

$frutas=$_POST['frutas'];
foreach($frutas as $fruta){
    echo $fruta. "<br>";
};