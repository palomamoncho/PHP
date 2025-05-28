<?php

$texto="Spain";

$variable_1=$texto;
$variable_2= &$texto;

echo $variable_2;

$texto="Carlos Alfaro";

echo $variable_2;

//Como resultado va a dar: Spain Carlos Alfaro