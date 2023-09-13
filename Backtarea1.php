<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mi primer backend</title>
  </head>
  <body>
    <h1>1. Hola Mundo</h1>
    <?php
    $saludo = "2. Hola Mundo";
    echo $saludo;
    ?>
    <br>
    <?php

$a = 9;
$b = 8;
$c = 40;
$d = 1.8;
$e = 32;
$f = 18;
$g = 12;
$h = 30;
$i = 3.14;
?>
<br>

<?php
$saludo = "3. la suma de A y B es";
echo $saludo;
    $total = $a + $b;
echo $total;
?>
<br>

<?php
$saludo = "3. la resta de A y B es";
echo $saludo;
     $total = $a - $b;
     echo $total;
 ?>
 <br>

 <?php
$saludo = "3. la multiplicacion de A y B es";
echo $saludo;
     $total = $a * $b;
echo $total;
  ?>
  <br>

  <?php
$saludo = "3. la division de A y B es";
echo $saludo;
$total = $a / $b;
echo $total;
   ?>

   <br>
   <?php
$saludo = "3. el resto de A y B es";
echo $saludo;
$total = $a % $b;
echo $total;
?>

<br>
<?php
$saludo = "4. la formula es f = (C * D) = E =";
echo $saludo;
$total = $c * $d + $e;
echo $total;
 ?>

 <br>
 <?php
$saludo = "5. el perimetro de un rectangulo es p = F +F + G + G=";
echo $saludo;
$total = $f + $f + $g + $g;
 echo $total;
?>

  <br>
  <?php
$saludo = "5 el area de un rectangulo es = F * G = ";
echo $saludo;
$total = $f * $g;
echo $total;
?>

<br>
<?php
$saludo = "5. el perimetro de un circulo es p = 2 * I *H=";
echo $saludo;
$total = 2 * $i * $h;
echo $total;
?>

<br>
<?php
$saludo = "5. el area de un circulo es A = I * H * H =";
echo $saludo;
$total = $i * $h * $h;
echo $total;
 ?>

   </body>
</html>
