<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<title>coche</title>
</head>
<body>
<?php

  include 'ordenador.php';
//coche1
  $coche1 = new ordenador();
    $marca='bmw';
  $marca=$coche1->getMarca();
  echo $marca;
  $caballos='1300';
$caballos=$coche1->getcaballos();
echo $caballos;
//coche2
$coche2 = new ordenador();
  $marca='mercedes'; 
$marca=$coche1->getMarca();
echo $marca;
$caballos='100';
$caballos=$coche1->getcaballos();
echo $caballos;
    ?>
  </body>
</html>
