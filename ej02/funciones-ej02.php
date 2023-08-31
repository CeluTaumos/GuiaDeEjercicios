
<?php
$resultado = 0;
$resultado_b = 0;
function resultante($PARAM01, $PARAM02)
{
    $resultado = ($PARAM01 + $PARAM02) ** 2;
    return $resultado;
}
function resultante_b($PARAM01, $PARAM02)
{
    $resultado_b = (pow($PARAM01, 2)) + (2 * $PARAM01 * $PARAM02) + (pow($PARAM02, 2));
    return $resultado_b;
}
?>