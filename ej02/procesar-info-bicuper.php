<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Binomio Cuadrado Perfecto</title>
</head>

<body>
    <div>
        <h2>El resultado es ...</h2>
        <?php
        $PARAM01 = $_POST["parametro-uno"];
        $PARAM02 = $_POST["parametro-dos"];
        include_once("funciones-ej02.php");
        $resultado = resultante($PARAM01, $PARAM02);
        $resultado_b = resultante_b($PARAM01, $PARAM02);

        echo "   <div>EL RESULTADO EN LA FUNCION EN POTENCIA  =" . " " .  $resultado . "   </div>";
        echo "   <div>EL RESULTADO EN LA FORMULA DESARROLLADA   =" . " " .  $resultado_b . "   </div>";
        ?>
        <p>Obvio que dio lo mismo! ¿QUÉ ESPERABAS?</p>
    </div>
    <div>
        <a href="/index.php">guia de ejercicios</a>
    </div>
</body>

</html>