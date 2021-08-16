# EJEMPLO fetchAll()
<?php
require "connect.php";
$data = $conecta->query("SELECT * FROM blogs");
$all = $data->fetchAll(PDO::FETCH_OBJ);
/*echo "<pre>";
print_r ($all);
echo "</pre>";*/
echo '<br>';
echo $all['0']->title,'--';
echo $all['0']->body,'<br>';
echo $all['1']->title,'--';
echo $all['1']->body,'<br>';
?>
