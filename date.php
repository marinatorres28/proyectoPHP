<?php
include "header.php";
function salto(){
    echo "<br>";
}

// date (string del formato)
echo "Fecha de hoy > ".date("d-m-Y");
salto();

// date con horas
echo "Fecha y hora actual > ".date("d/m/y - H:i:s"); // la h en minuscula para la hora en formato 12h, y mayuscula para 24h

// dia de la semana en ingles
salto();
echo "Hoy es > ".date("l").",".date("d"). " de " . date("F"). " de ".date("Y");
salto();




