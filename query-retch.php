<?php
/* ESTE ES UN EJERCICIO PARA PROBAR EL MÉTODO CATCH
    DE CONTROL DE ERRORES O EXCEPCIONES */

# inicializar las variables de la conexión
echo "!< QQUERY FETCH  >";

try {
    $host     = "localhost";
    $dbname   = "CURSOPHP";
    $user     = "root";
    $password = "xxxxxxxxxx";
    echo '<br>';
    echo "Instanciar la P.O.O.";
    echo '<br>';
    $conecta = new PDO ("mysql:host=$host;
                  dbname=$dbnames", "$user", "$password");
    $conecta->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
    echo $e->getMessage();
    #die("error de conexión con la base de datos");
 }
 /* se define elobjeto $lineas que elecciona el campo title de la tabla blogs y se seusara para
  imprimir las lineas (o row) con sus títulos de la tabla blogsS de la base de datos CURSOPHP */
$lineas = $conecta->query("select title from blogs");
# se define elobjeto $lineas que seusara para imprimir las lineas (o row) con sus títulos de la tabla blogs
while($row = $lineas->fetch()) {
  echo $row['title'] . "<br>";
}
?>
