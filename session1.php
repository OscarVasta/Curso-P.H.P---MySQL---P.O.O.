/*session1.php*/
<?php
/* ESTE PROGRAMA CARGA ALGUNOS DAOS DE SESION EN LA VARIABLE  SUPERGLOBAL
SESSION PARA SER USUDA LUEGO POR OTROS PROGRAMAS , SOLO A TÍTULO DE EJEMPLO */
session_start();
$_SESSION['nombreusuario'] = "pepe-capo";
$_SESSION['edad'] = 64;
$_SESSION['colorfavorito'] = "azul";
?>
