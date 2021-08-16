<?php
/* ** CODIGO PARCIAL PARA PROBAR EL CONTROL DE ERRORES MEDIANTE TRANSACTION() , EXCEPTION Y ROLLBACK() ** */
require "connect.php";
try {
  $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conecta->beginTransaction();
  # --- ejecuta un par de query solo a título de prueba ---
  $conecta->query("INSERT INTO blogs (title, body, users_id, cat_name) VALUES ('Javascript', 'body java', 2, 'JS')");
  # --- este query introduce un error deliveradamente para probar la funcionalidad de Exception y rollback() ---
  $conecta->query("INSERT INTO blogs (ccc, bbb) VALUES ('php', 'body abot php', 1, 'php')");
  $conecta->commit();
} catch(PDOException $e) {
  /* rollback() causara que apsar que el bloque try{} tienen un query defectuoso , el query que
   esta bien se ejecutara de todos modos y se detendra solo el query que esta mal */
  $conecta->rollback();
  # --- muestra el código de error y la causa igual que el registro de /apache2/error.log ---
  echo $e->getMessage();
}
$conecta->close();
?>
