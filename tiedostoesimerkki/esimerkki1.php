<html>
<head>
  <meta charset="utf-8"/>
  <title>Eka php-esimerkki</title>
  <style>
  table { border-collapse: collapse;}
  table, td {
    border: 1px solid black;
  }
  </style>
</head>
<body>

<form action="teeJotain.php" method="post">
  <label>Nimi</label><br/>
  <input type="text" name="nimi" placeholder="Syötä nimi tähän"/><br/>
  <label>Sähköposti</label><br/>
  <input type="text" name="mail" placeholder="Syötä sähköpostiosoitteesi tähän"/><br/>
  <input type="submit" name="send" value="Lähetä" />
</form>
<div>
<?php
$f = fopen("users.txt", "r") or die("Tiedoston avaaminen ei onnistu");
echo '<table>'.PHP_EOL;
while(!feof($f)) {
  $rivi = fgetcsv($f,0,";");
  if (count($rivi)>1) {
    echo "
    <tr>
      <td>". $rivi[0] . "</td>
      <td>" . $rivi[1] . "</td>
    </tr>" . PHP_EOL;
  }
}
echo "</table>" . PHP_EOL;
fclose($f);
?>
</div>
</body>
</html>
