<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color del semaforo</title>
</head>

<body>


    <div>
        <h2>Entonces, señor conductor...</h2>
        <?php
        include_once("funciones-ej01.php");

        $color = $_POST["color-recibido"];
        $estado_A = semaforo_a($color);
        $estado_B = semaforo_b($color);
        $estado_C= semaforo_c($color);

        echo "<div>SEMÁFORO FUNCION A =" . " " .  $estado_A . "</div>\n";
        echo "   <div>\nSEMÁFORO FUNCION B  =" . " " .  $estado_B . "   </div>";
        echo "   <div>\nSEMÁFORO FUNCION C  =" . " " .  $estado_C . "   </div>";
        ?>
    </div>

</body>

</html>