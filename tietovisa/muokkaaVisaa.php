<?php

include 'autentikoi.php';

if ( autentikoiBasic() === false ) {
	header("refresh:2;url=tietovisa.php");
	die("<h1 style=\"color: red;\">Pääsy evätty! Mene pois!</h1>");
}

$output = '<p>Tervetuloa muokkaamaan tietokilpailun kysymyksiä.</p>';

$xml = simplexml_load_file('tietovisa.xml');

foreach ($xml->taso as $taso){
	$output .= '<div class="kysymys">
					<div class="painikkeet">
						<a href="muokkaaKysymys.php">Muokkaa</a>
						<a href="poistaKysymys.php">Poista</a>
					</div>
					<strong>' . $taso->kysymys . '</strong>
				</div>';
	
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="css/tietovisa_screen.css" />
</head>
<body>
<h1>Tietovisan muokkaustila</h1>

<?php
echo $output;
?>

</body>
</html>