<?php
/* ESTE ES UN EJERCICIO PARA PROBAR LA CONEXIÓN DE P.H.P. CON UNA
    BASE DE DATOS MEDIANTE METODOS DE PROGRAMACIÓN ORIENTADA A OBJETOS */

# inicializar las variables de la conexión
echo "!< PRUEBA DE CONEXIÓN >";
$host = "localhost";
$dbname = "CURSOPHP";
$user = "root";
$password = "xxxxxxxxxx";
echo '<br>';
echo "Instanciar la P.O.O.";
echo '<br>';
$conecta = new PDO ("mysql:host=$host;
              dbname=$dbname", "$user", "$password");
#controlar si la conexión funciona
if($conecta == true) {
  echo "------------la base de datos esta trabajando bien-----------";
}  else {
    echo "algo anda mal";
    }

?>
