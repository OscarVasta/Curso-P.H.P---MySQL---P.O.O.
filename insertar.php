<?php
  $conexion = mysql_connect('localhost','root','xxxxxxxxxx','insertar');
  $v1 = $_POST['w3'];
  $v2 = $_POST['w4'];
  $sqlTabla1= "INSERT into tabla1 (valorA1 ,valorA2)
                  VALUES ( $v1, $v2)";
  $ejecutado = mysql_query($conexion,$sqlTabla1);
  if($ejecutado == 1){
                      $sqlTabla1= "INSERT into tabla2 (valorB1 ,valorB2)
                    VALUES ( $v1, $v2)";
                    $ejecutado2 = mysql_query($conexion,$sqlTabla1);
                    echo "exito doble";
                    }else{ echo "no se inserto nada";
                        }
?>
