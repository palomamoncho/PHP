<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="datos_formulario.php" method="POST" >

    <label for="asignatura">Asignatura</label>
    <select id="asignatura" name="asignatura[]" multiple>
        <option value="Ingles">Ingles</option>
        <option value="Matemáticas">Matemáticas</option>
        <option value="Ciencia">Ciencia</option>
        <option value="Lenguaje">Lenguaje</option>
    </select>

    <br><br>

    <label for="opcion1">
        <input type="checkbox" value="Manzana" id="opcion1" name="frutas[]">
        Manzana
    </label>

    <label for="opcion2">
        <input type="checkbox" value="Fresa" id="opcion2" name="frutas[]">
        Fresa
    </label>
    <label for="opcion3">
        <input type="checkbox" value="Uva" id="opcion3" name="frutas[]">
        Uva
    </label>

    <br><br><br>

    <button type="submit" >Enviar</button>
    </form>
</body>
</html>