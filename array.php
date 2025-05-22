<?php
#Array de tipo escalar
$estudiantes=array("Paloma","Andrea,","Yolanda","Claudia");
echo $estudiantes[0];
$tutor=array("Pablo","Reyes","Olga");
echo $tutor[1];

#Array multidimensional
$tutor_2=[
    "nombre"=>"Vanesa",
    "apellido"=>"Calles",
    "edad"=>20,
    "cursos"=>["Php","Python","css"]
];
echo $tutor_2["cursos"][1];
echo count($estudiantes,COUNT_RECURSIVE);