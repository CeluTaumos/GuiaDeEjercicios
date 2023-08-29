<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio del Binomio Cuadrado Perfecto</title>
</head>

<body>
    <h3>Binomio Cuadrado Perfecto</h3>
    <p>Volvamos a la cq</p>

    <form action="procesar-info-bicuper.php" method="post">
        <div>
            <p>PARAMETRO UNO</p>
            <label for="parametro-uno"></label>
            <input type="number" placeholder="Ingrese un numero" id="parametro-uno" name="parametro-uno">
        </div>
        <div>
            <p>PARAMETRO DOS</p>
            <label for="parametro-dos"></label>
            <input type="number" placeholder="Ingrese otro numero" id="parametro-dos" name="parametro-dos">
        </div>

        <div>
            <br>
            <button class='w3-button w3-blue' type='submit'>dame el resultado</button>
        </div>
    </form>
</body>

</html>