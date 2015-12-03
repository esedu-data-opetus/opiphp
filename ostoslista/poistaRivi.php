<?php

if (isset($_GET['rivi'])) {

  $lines = file("lista.txt");
  $index = $_GET['rivi'];
  unset($lines[$index]);
  file_put_contents("lista.txt",$lines);
  header("Location: index.php");
} else {
  echo "Herja! Et antanut poitettavaa riviä";
}


?>
