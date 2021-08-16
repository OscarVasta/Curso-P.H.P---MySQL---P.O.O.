<?php
/* 1er Proyecto PHP-POO-MySQL
     **** conn.php ****
PARA CONECTAR CON LA BASE DE DATOS
*/
try {
  # inicializar las variables de la conexión
  $host = "localhost";
  $dbname = "todos"; #tareas por hacer
  $user = "root";
  $pass= "xxxxxxxxxx";
  # define el objeto $conn
  $conn = new PDO ("mysql:host=$host;dbname=$dbname",$user,$pass);
  # establece el control de errores y excepciones
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  # captura la excepción
} catch(PDOException $e) {
  #muestra el error
  echo "el error es: " . $e->getMessage();
}
# por Oscar Vasta
?>
