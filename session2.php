/* session2.php */
<?php
/*ESTE PROGRAMA CAPTURA LA INFORMACION ALMACENADA EN SESSIONS POR EL
PROGRAMA session1.php CUANDO SE EJECUTO Y LUEGO BORRA ESTA INFORMACIÓN
PARA QUE NO SEA CAPTURADA POR OTRO INTRUSO , ES DECIR "CIERRA LA SESION"
*/

session_start();
?>
<html>
  <head></head>
  <body>
    <h3><?php
        echo $_SESSION['nombreusuario'] . " su edad es " . $_SESSION['edad'];
        ?>
    </body>
 </html>
