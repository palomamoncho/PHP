<?php
$numero=NULL;

if(is_null($numero)) {
    echo "Es nula";
}else{
    echo "No es nula";
}

$numero="9";

unset($numero);

//Empty se usa si la variable está vacia

$numero="9";

if(empty($numero)) {
    echo "Esta vacia";
}else{
    echo "No esta vacia";
}

//isset Si la variable esta definida y no es null

$numero="9";

if(isset($numero)) {
    echo "Esta definida";
}else{
    echo "No esta definida";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for.php" method="POST">
        <input type="text" name="numero">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>