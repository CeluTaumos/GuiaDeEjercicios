
<?php

function sumatoria_a($nrossumar){
    $resultado=0;
    for($i=0;$i<count($nrossumar);$i++){
        $resultado+=$nrossumar[$i];
    }
    return $resultado;
}


function sumatoria_b($nrossumar){
    $resultado=0;
   foreach($nrossumar as $nro){
    $resultado += $nro;
   }
   return $resultado;
}

function sumatoria_c($nrossumar){
    $resultado=0;
    $i=0;
 while($i<count($nrossumar)){
$resultado += $nrossumar[$i];
$i++;
 }
 return $resultado;
}

