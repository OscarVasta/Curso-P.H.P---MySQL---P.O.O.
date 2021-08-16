<?php
/* ** CODIGO PARCIAL PARA ACTUALIZAR REGISTROS EN LA TABLA BLOGS DE LA BASE DE DATOS CURSOPHP ** */
// --- incluye el codigo parcial que se usa para conectar la base de datos con PHP ---
require "connect.php";
// --- carga de variables ---
$nuevotitulo = "title 24°";
$id = 1;
// (vamos a cambiar el título del 1° registro - en este ejemplo)
// --- prepara declaración ---
$update = $conecta->prepare("UPDATE blogs SET title = :title WHERE id = :id");
// --- ejecuta ---
$update->execute(array(
  ":title" => $nuevotitulo,
  ":id" => $id
));
// --- cierra la declaración ---
$update->close();
?>
