<?php
$f = fopen("lista.txt","w+") or die("Kuolit");
fclose($f);

header("Location: index.php");
 ?>
