<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Incrementada</title>
</head>

<body>
    <div>
        <h3>（＾∀＾●）ﾉｼ</h3>

        <?php
        include_once("funciones-ej04.php");
        $var = $_POST["variable"];
        incrementar($var) ;
        echo "<div>"  . " El numero se incremento a : " . $var  .  "</div> ";
        ?>
    </div>
    <div>
        <a href="/index.php">guia de ejercicios</a>
    </div>
</body>

</html>