<?php
// Tarkistetaan, että tullaan lomakkeelta
// ja että meillä on $_GET['asia']
if (isset($_GET['asia'])) {
    $asia = $_GET['asia'] . PHP_EOL; // otetaan get-parametri talteen

    // avataan tiedosto a-moodissa (append-tilassa)
    $f = fopen("lista.txt","a") or die("Unable to open file!");
    fwrite($f,$asia); //kirjoitetaan tiedostoon
    fclose($f); // suljetaan

    header('Location: index.php'); //ohjataan takaisin index.php-sivulle

}
else {
    echo "ERROR: 'Nuija! Ei ole mitään lisättävää!'";
}

?>
