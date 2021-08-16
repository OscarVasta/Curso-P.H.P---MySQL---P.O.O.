<?php
/* ESTE ES UN EJERCICIO PARA PROBAR EL MÉTODO CATCH
    DE CONTROL DE ERRORES O EXCEPCIONES */

# inicializar las variables de la conexión
echo "!< PRUEBA DE CONEXIÓN >";
$host     = "localhost";
$dbname   = "CURSOPHP";
$user     = "root";
$password = "xxxxxxxxxx";
echo '<br>';
echo "Instanciar la P.O.O.";
echo '<br>';
$conecta = new PDO ("mysql:host=$host;
              dbname=$dbname", "$user", "$password");
#controlar si la conexión funciona
try {
    $host     = "localhost";
    $dbname   = "CURSOPHP";
    $user     = "root";
    $password = "RacsoMyOracle";
    echo '<br>';
    echo "Instanciar la P.O.O.";
    echo '<br>';
    $conecta = new PDO ("mysql:host=$host;
                  dbname=$dbnames", "$user", "$passwor");
    $conecta->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
    # echo $e->getMessage();
    die("error de conexión con la base de datos");
 }


?>
