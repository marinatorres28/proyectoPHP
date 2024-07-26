<?php
include "header.php";
$cadena="Bienvenido a mi página web.";
echo "El primer carácter es " , "<strong>",substr($cadena,0,1) , "</strong>" , ".<br>";
$ultimoCaracter=substr($cadena,strlen($cadena)-2,1);
echo "El ultimo carácter es <strong>" , $ultimoCaracter , "</strong>";


