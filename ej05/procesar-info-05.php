<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma realizada</title>
</head>

<body>
    <div>
        <h3>El resultante de tu suma</h3>

        <?php
        include_once("funciones-ej05.php");
        $nrossumar = $_POST["arreglo-numeros"];
        $resultado_sumatoria_a = sumatoria_a($nrossumar);
        $resultado_sumatoria_b = sumatoria_b($nrossumar);
        $resultado_sumatoria_c = sumatoria_c($nrossumar);

        echo "<div>"  . " El resultado según la función a es : " . $resultado_sumatoria_a  .  "</div> ";
        echo "<div>"  . " El resultado según la función b es : " . $resultado_sumatoria_b  .  "</div> ";
        echo "<div>"  . " El resultado según la función c es : " . $resultado_sumatoria_c  .  "</div> ";
        ?>
    </div>
    <div>
        <a href="/index.php">guia de ejercicios</a>
    </div>
</body>

</html>