<?php
/* ** CODIGO PARCIAL PARA CONTAR LOS  REGISTROS EN LA TABLA BLOGS DE LA BASE DE DATOS CURSOPHP ** */
// --- incluye el codigo parcial que se usa para conectar la base de datos con PHP ---
require "connect.php";
// --- prepara declaración ---
$datos = $conecta->query("SELECT * FROM blogs");
echo '<br>';
// --- ejecuta la consulta ---
$registros = ($datos->rowCount());
// --- muestra el resultado de la consulta ---
 printf("---- blogs tiene %d registros o filas ----.\n", $registros);
// --- cierra la declaración ---
$datos->close();
?>
