<?php



$estado_A = "estado desconocido";
function semaforo_a($color)
{
    if ($color == "rojo" || $color == "ROJO")
        $estado_A = "FRENE";
    else if ($color == "verde"|| $color == "VERDE") {
        $estado_A = "AVANCE";
    } else if ($color == "amarillo" || $color == "AMARILLO") {
        $estado_A = "PRECAUCION";
    } else {
        $estado_A = "estado desconocido";
    }
    return  $estado_A;
}
function semaforo_b($color)
{
    $estado_B = ($color == "rojo" || $color == "ROJO") ? "DETENTE AHI!" : (($color == "verde" || $color == "VERDE") ? "AVANCE NO MÁS" : (($color == "amarillo"|| $color == "AMARILLO") ? "ATENTIS" : "no sé puede ver"));
    return $estado_B;
}

function semaforo_c($color)
{
    $estado_C = "estado desconocido";
    switch ($color) {
        case "verde":
        case "VERDE":
            $estado_C = "AVANCE COMPA";
            break;
        case "rojo":
        case "ROJO":
            $estado_C = "PARA QUE TE CHOCAN";
            break;
        case "amarillo":
        case "AMARILLO":
            $estado_C = "GUARDA GUARDA";
            break;
        default:
            $estado_C = "ERROR";
            break;
    }
    return $estado_C;
}

?>
