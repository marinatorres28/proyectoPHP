<!--include -> incluye y evalua el archivo especificado-->
<?php
include "header.php";
/**
 * Las comillas dobles muestran variables, cadenas, y carácteres especiales
 *
 * La funcion nl2br(tuCadena) permite realizar el salto de linea en HTML
 */

//1 ejemplo, echo sin nl2br
echo "Ejemplo de salto de linea con el código de escape \\n no se ejecuta sin el nl2br \n";
echo "Aquí otro texto<br>";
//2 ejemplo, echo con nl2br
echo nl2br("Este es un ejemplo dónde sí hace salto de línea con \\n \n Aquí otro texto");
//3 ejemplo, comilla simple dentro de comilla simple
$variable="Contenido";
echo nl2br('<br>La \' $variable puede tener un texto \' que no se muestra, si no su identificador');
//4 ejemplo, mostrando el valor de la variable con comillas dobles
echo nl2br("\n El '$variable puede tener un texto ' que si se muestra, utilizando comillas \" ");
//5 ejemplo, el codigo html se muestra tanto en comillas dobles como comillas simples
echo '<br>El párrafo tiene <strong>tiene muchas líneas</strong> en el código HTML';
/**
 * Resumen
 * código de escape
 * \n -> salto de linea
 * \" -> muestra la comilla doble dentro de un string comenzado con comillas
 * \' -> idem al anterior
 * \\ -> muestra la barra
 * 
 */
