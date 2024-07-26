<?php
include "header.php";
// la fecha de hoy
$hoy=date("d-m-Y");
echo "Hoy es ", $hoy;
// calcular la fecha de ayer
$ayer=date("d-m-Y",strtotime("-1 day"));
echo "<br>Ayer fue $ayer";
$manana=date("d-m-Y",strtotime("+1 day"));
echo "<br>Manana será $manana";
$mesUnMes=date("d-m-Y",strtotime("+1 month"));
echo "<br>Dentro de un mes será $mesUnMes";
$cincoAnios=date("d-m-Y",strtotime("+5 year"));
echo "<br>Dentro de cinco años será $cincoAnios";
