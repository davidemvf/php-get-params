<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
   $altezza = $_GET["altezza"];
   $lunghezza = $_GET["lunghezza"];
   $profondita = $_GET["profondita"];
   $volume = $altezza * $lunghezza * $profondita; ?>
  </head>
  <body>
    <h2>Il volume è:  <?php echo $volume ?></h2>
  </body>
</html>
