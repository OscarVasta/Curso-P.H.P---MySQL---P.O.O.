/* ** EJEMPLO DE PREPARACÓN DE DECLARACIÓN ** */
<?php
// --- incluye el codigo parcial que se usa para conectar la base de datos con PHP ---
require "connect.php";
// --- carga de variables ---
$title = "title four";
$body = "body fout";
$users_id = 4;
$cat_name ="python";
// --- prepara declaración ---
$insert = $conecta->prepare("INSERT INTO post (title, body, users_id, cat_name) VALUES (?, ?, ?, ?)");
/*(los signos ? equivalen a escribir :title, :body , representan las posiciones de los datos
   en el registro que se esta preparanso para insertar)*/
// --- ejecuta ---
$insert->execute(array($title, $body, $users_id, $cat_name));
/*$dato = "2° dato";
$fechayhora=date('Y-m-d H:i,a :s');
echo $dato, $fechayhora;
echo '<br>', '<br>';
echo " prepara la declaración, ( los signos de interrogacion representan las posiciones de los campos a insertar", '<br>';
echo" , equivale a escribir :title, :body, etc)", '<br>';
$insert = $conecta->prepare("INSERT INTO prueba (dato, fechayhora) VALUES (?, ?)");
echo "ejecuta la declaración", '<br>';
$insert->execute(array($dato, $fechayhora));*/
/* METODO CON BINDPARAM()
$stmt = $conecta->prepare("INSERT INTO prueba (dato, otrodato) VALUES (?, ?)");
// Bind
$dato = "mierda";
$otrodato = "la que te repario";
echo $dato, $otrodato;
$stmt->bindParam(1, $dato);
$stmt->bindParam(2, $otrodato);
// Excecute
$stmt->execute();
// Bind
$dato = "peluda";
$otrodato = "la concha perra ";
$stmt->bindParam(1, $dato);
$stmt->bindParam(2, $otrodato);
// Execute
$stmt->execute();
echo "YA SE REALIZO LA INSERCIÓN", '<br>';*/
?>
