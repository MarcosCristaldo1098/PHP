<?php
$edades = array(" Moises "=> " 33 ", "Camila"=>" 25 "," Samanta " => " 17 ");
ECHO " Camila tiene " . $edades['Camila'] . " años .";

foreach($edades as $x => $valor){
    echo  " Clave = " . $x . ", valor = " , $valor;
    echo "<br>";
}
?>