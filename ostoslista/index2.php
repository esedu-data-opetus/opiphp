<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Ostoslista</title>
  <style>
    .wrapper {
      width: 600px;
      margin: 1em auto;
      border: 1px solid #999;
      padding: 1em;
    }
    .lista {
      width:580px;
      margin: 10px 0;
      background-color: #bbb;
      padding: 10px;
    }
  </style>
</head>
<body onload="document.lomake.asia.focus();">
<div class="wrapper">
  <h1>Ostoslista</h1>
  <form name="lomake" action="tallenna.php" method="get" >
    <input type="text" name="asia" placeholder="syötä asia"/>
    <input type="submit" value="Lisää" />
  </form>
  <div class="lista">
    <ul>
    <?php
    $f = fopen("lista.txt", "r") or die("Unable to open file!");
    while(!feof($f)) {
      $asia = fgets($f);
      if (strlen($asia) > 1) {
        echo "<li>" . $asia . "</li>" . PHP_EOL;
      }
    }
    fclose($f);
?>
    </ul>
  </div>
</div>
</body>
</html>
