<?php
include "header.php";

echo "<div class='contenedor'>";
// Funciones de las cadenas de carácteres
// Conocer la longitud de una cadena

$cadena="Hola mundo, ¿cómo estas hoy?";
echo "La cadena \"$cadena\" tiene una longitud de " .mb_strlen($cadena)." caracteres";

// mostrar los primeros 12 carácteres de la cadena
echo "<br>Los primeros 12 caracteres > " .mb_substr($cadena,0,13)."'";

// convertir la cadena en un array, le tengo que indicar el delimitador, en nuestro ejemplo podría ser la coma ","
$array=explode(",",$cadena);
echo "<br>";
echo $array[0];
echo "<br>";
echo $array[1];

// reemplazar una cadena por otra
echo "<br>";
echo substr_replace($cadena,"este es el reemplazo de la cadena",12);

// reemplazar toda la cadena por otro texto
echo "<br>";
echo str_replace("a","x",$cadena);

// mostrar la posicion de la primera "o" en el texto
echo "<br>";
echo "La primera o esta en la posicion > ". strpos($cadena,"o");
echo "<br>";
echo "La ultima o esta en la posicion > ". strrpos($cadena,"o");

// ucfirst cambia la primera letra de una cadena a mayuscula
$nombre="maria perez";
echo "<br>El nombre original es $nombre, pero con la funcion ucfirst, cambia a ".ucfirst($nombre);
echo "<br>El nombre y el apellido utilizando ucfirst seria ".
    ucfirst(mb_substr($nombre,0,mb_strpos($nombre," ")))
    ." ".
    ucfirst(mb_substr($nombre,mb_strpos($nombre," ")+1));
// existe una funcion que pasa todas las palabras, la primera en mayuscula -> ucwords
echo "<br>Con ucword convierte la primera letra de cada palabra en mayuscula > " .ucwords($nombre);

// quitar los espacios de derecha a izquierda
$otraCadena=" en un lugar de la mancha ";
echo ucwords(trim($otraCadena));
salto();
// convertir una cadena a minuscula
echo "<br>".mb_strtolower($cadena);
salto();
// convertir una cadena a mayuscula
echo mb_strtoupper($otraCadena);

// necesita crear una cadena encriptada MD5 -> Wordpress -> hash
$password='Mi$ifu2024';
salto();
echo "La contraseña $password en MD5 es > " . md5($password);
salto();
// tambien se puede convertir en sha1 otro tipo de encriptacion
echo "La contraseña $password en sha1 es ".sha1($password);
salto();
echo "La longitud de sha1 es de > ".strlen(sha1($password)). " caracteres";
salto();

// strstr busca la primera aparicion de una cadena dentro de otra cadena
echo "Con strstr a partir de la primera u, muestra el resto de la cadena ".strstr($otraCadena,"u");
salto();

// con strrchr buscar la ultima aparicion de una cadena dentro de otra cadena
echo "Con strrchr a partir de la ultima u, muestra el resto de la cadena ".strrchr($otraCadena,"u");
salto();

echo "</div>";


function salto(){
    echo "<br>";
}
include "footer.php";



