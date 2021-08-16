<html>
    <head><title>ejemploPost.php</title></head>
  <body>
    <h3>PROGRAMA P.H.P. RECIBE INFORMACIÓN</h3>
    <form>Tu nombre es : <?php isset($_POST['nombre']) ? print $_POST['nombre']:"";?>
    </form>
    <br />
  </body>
</html>
