<?php
/* EJEMPLO AUTO-GET.PHP */
if(isset($_GET['dato'])) {
    $idato = $_GET['dato'];
    echo " El dato que ingresé es : $idato"
    }
?>
<html>
    <head>
          <title></title>
    </head>
  <body>
    <a href="ejemploautoGet.php?dato=lo-que-se-me-ocurra">ingresalo</a>
  </body>
</html>
