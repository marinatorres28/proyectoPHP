<?php
include "header.php";
echo "<div class='contenedor'>";
$hoy="26 de Julio de 2024";
// buscar la posicion del primer de
$de1=strpos($hoy,"de");
//buscar la posicion del ultimo de
$de2=strrpos($hoy,"de");
echo "La posicion del 1 es $de1 y del ultimo es $de2";

// calculamos el dia, el mes y el año
$dia=substr($hoy,0,$de1-1);
$mes=substr($hoy,$de1+3,$de2-$de1-3);
$anio=substr($hoy,$de2+3);

// mostramos el dia, el mes y el año
echo "<br>El dia es $dia";
echo "<br>El mes es $mes";
echo "<br>El año es $anio";
echo "</div>";
include "footer.php";
