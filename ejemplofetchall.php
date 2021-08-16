# EJEMPLO fetchAll()
<?php
require "connect.php";
$data = $conecta->query("SELECT * FROM blogs");
$all = $data->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r ($all);
echo "</pre>";
?>
