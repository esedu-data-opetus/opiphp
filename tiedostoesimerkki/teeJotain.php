<?php
$f = fopen("users.txt", "a") or die("Tiedostoon tallennus ei onnistu");
$rivi = $_POST['nimi'] .";" . $_POST['mail'] . PHP_EOL;
fwrite($f, $rivi);
fclose($f);
header("Location: esimerkki1.php");
