<?php
/* ESTE ES UN EJERCICIO PARA PROBAR MÉTODO AVANZADOS DE FETCH() */

# inicializar las variables de la conexión
echo "!< ADVANCED FETCH OPTIONS  >";
echo "<br>";

try {
    $host     = "localhost";
    $dbname   = "CURSOPHP";
    $user     = "root";
    $password = "xxxxxxxxxx";
    #Instanciar la P.O.O.
    $conecta = new PDO ("mysql:host=$host;
                  dbname=$dbname", "$user", "$password");
    $conecta->setAttribute(pdo::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
    echo $e->getMessage();
    #die("error de conexión con la base de datos");
 }
 /* se define el objeto $ lineas que elecciona el campo title de la tabla blogs y se seusara para
  imprimir las lineas (o row) con sus títulos de la tabla blogsS de la base de datos CURSOPHP */
$lineas = $conecta->query("select body from blogs");
# se realiza el loop para listar los cuerpos de los blogs
while($row = $lineas->fetch(PDO::FETCH_ASSOC)) {
  echo $row['body'].'<br>';
}
echo "# realizo el loop while";
?>
