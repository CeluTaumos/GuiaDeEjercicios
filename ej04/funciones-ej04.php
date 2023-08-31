
<?php

//( ´･･)ﾉ(._.`)
//**DISCLAIMER--n e c e s i t o c o m e n t a r e s t o */
/*el símbolo & se utiliza para pasar una variable por referencia
a una función en lugar de por valor. Esto significa que, cuando pasas una variable
por referencia a una función,cualquier cambio que hagas dentro de la función se reflejará
en la variable original fuera de la función.En otras palabras,la función operará directamente
sobre la variable original en lugar de una copia de ella.*/

function incrementar(&$var)
{
    $var =  $var + 1;
}
?>
