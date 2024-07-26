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

// establecer la configuración regional de españa
setlocale(LC_TIME,"es_ES.UTF-8");
// mostrar la fecha actual con el nuevo formato
echo strftime("%A, %d de %B de %Y"); // pendiente cambiar idioma
salto();

// construir una fecha desde datos del usuario
$dia=25;
$mes=04;
$anio=2023;
$fecha=mktime(null,null,null,$mes,$dia,$anio);
echo date("d-m-Y",$fecha);
salto();

// ejemplo de calcular los dias que faltan desde la fecha actual a fin de año
$hoy=date_create(date("m/d/Y")); // fecha actual
$finAnio=date_create("12/31/2024"); // fecha fin de año
$diferencia=date_diff($hoy,$finAnio);
$diasQueFaltan=$diferencia->format("%a"); // muestra en numerico los dias que faltan
echo "Los dias que faltan hasta fin de año son $diasQueFaltan";
salto();
$inicioAnio=date_create("01/01/2024"); // primer dia del año
$diferencia=date_diff($hoy,$inicioAnio);
$diaTranscurrido=$diferencia->format('%R%a dias');
echo "Los días transcurridos han sido $diaTranscurrido";
salto();

// calcular fecha de nacimiento
$nacimientoAndres=date_create("11/07/2001");
$diferencia=date_diff($hoy,$nacimientoAndres);
$edadAndres=$diferencia->format("%y años");
echo "Andres tiene $edadAndres";



