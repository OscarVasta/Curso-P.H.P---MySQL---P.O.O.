<?php
/* ** CODIGO PARCIAL PARA INSERTAR REGISTROS EN LA TABLA BLOGS DE LA BASE DE DATOS CURSOPHP ** */
// --- incluye el codigo parcial que se usa para conectar la base de datos con PHP ---
require "connect.php";
$registrosantes = $insert->num_rows;
// --- carga de variables ---
$title = "title 15°";
$body = "body 15°";
$users_id = 2;
$cat_name ="cobol";
// --- prepara declaración ---
$insert = $conecta->prepare("INSERT INTO blogs (title, body, users_id, cat_name) VALUES (?, ?, ?, ?)");
/*(los signos ? equivalen a escribir :title, :body , representan las posiciones de los datos
   en el registro que se esta preparanso para insertar)*/
// --- ejecuta ---
$insert->execute(array($title, $body, $users_id, $cat_name));
// --- controla la ID del último registro insertado ---
$ulreg = ($conecta->lastInsertId());
echo $ulreg;
// --- cierra la declaración ---
$insert->close();
?>
