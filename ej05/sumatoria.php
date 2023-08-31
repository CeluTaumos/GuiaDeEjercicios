<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 05</title>
</head>

<body>
    <h3>SUMANDO NUMEROS </h3>
    <p>facilito</p>
    <form action="procesar-info-05.php" method="post">
        <label for="arreglo-numeros[]">Seleccione algunos números:</label>
        <select name="arreglo-numeros[]" id="arreglo-numeros[]" multiple>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <button type="submit">SUMAR!</button>
    </form>

    <div>

        <a href="/index.php">guia de ejercicios</a>

    </div>
</body>

</html>