<?php
// apufunktioita.php
function tulostaLista(){
  $f = fopen("lista.txt","r");
  echo "<ul>";
  while (!feof($f)) {
    $juttu = fgets($f);
    if (strlen($juttu) > 1) {
      echo "<li>" . $juttu . "</li>";
    }
  }
  echo "</ul>";
  fclose($f);
}

function tulostaReverseLista(){
  $lines = file("lista.txt");
  $lines = array_reverse($lines);
  echo "<ul>";
  // for ($i=0; $i < count($lines); $i++) {
  //   echo "<li>" . $lines[$i] . "</li>";
  // }
  $index = count($lines)-1;
  foreach ($lines as $line) {
    //echo '<li>' . $line . '&nbsp;<a href="poistaRivi.php?rivi=' . $index . '">poista</a></li>';
    echo "<li>{$line}&nbsp;<a href=\"poistaRivi.php?rivi={$index}\">poista</a></li>";
    $index--;
  }

  echo "</ul>";
}
?>
