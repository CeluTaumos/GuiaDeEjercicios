<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textos Concatenados</title>
</head>

<body>
    <div>
        <h3>Sos todo un poeta ^o^</h3>

        <?php
        include_once("funciones-ej03.php");
        $TEXTO01 = $_POST["texto-01"];
        $TEXTO02 = $_POST["texto-02"];
        $concatenacion=concatenante($TEXTO01,$TEXTO02);
        echo "<div>"  . $concatenacion .  "</div> "     ;
        ?>
    </div>
</body>

</html>