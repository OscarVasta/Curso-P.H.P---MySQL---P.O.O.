/* ejemplotime.php */
<?php
/* ESTE PROGRAMA MUESTRA LAS FUNCIONALIDADES DE LA FUNCION TIME  */

echo '<br>';
echo "Esta es la zona horaria  del servidor actualmente : |";
echo date_default_timezone_get();
echo '|';
echo '<br>';
echo "Y la hora del servidor es ", date("H:i,a :s"), '<br>';
date_default_timezone_set('America/Argentina/Buenos_Aires');
/*Se debe ingresar sin espacios y sin acento
(no como esta en www.php.net/manual/en/timezones.america.php)*/
echo "Y ahora la zona horaria del servidor es : |";
echo date_default_timezone_get();
echo '|';
echo '<br>';
date_format($date, 'G:ia');
echo date("H:i,a :s")," - ";
echo date('Y-m-d H:i,a :s')," - ";
echo date('d-m-Y H:i,a :s');

echo "<br>";
?>
