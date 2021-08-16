<?php
/* ** CODIGO PARCIAL PARA BORRAR REGISTROS EN LA TABLA BLOGS DE LA BASE DE DATOS CURSOPHP ** */
// --- incluye el codigo parcial que se usa para conectar la base de datos con PHP ---
require "connect.php";
// --- asigna el registro a borrar ---
$id = 7;
// --- prepara declaración ---
$delete = $conecta->prepare("DELETE FROM blogs WHERE id = :id");
// --- ejecuta ---
$delete->execute([
  ":id" => $id
]);
// --- cierra la declaración ---
$delete->close();
?>
