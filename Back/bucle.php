<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Estructuras de control parte 2</h1>
    <br>
<?php
print "<p>Ejercicio 1 </p>\n";
$i=1;
do {
    print $i;
    $i++;
} while ($i <= 100);
 ?>
<br>


<?php
print "<p>Ejercicio 2 </p>\n";
$i=100;
 while ($i >= 1) {
   print $i;
  $i--;
 }
?>
<br>
<?php
print "<p>Ejercicio 3 </p>\n";
$i=2;
 for ($i=2; $i <=100 ;$i= $i+2) {
   print $i;
 }
?>
<br>
<?php
print "<p>Ejercicio 4 </p>\n";
$num1=1;
$num2=100;
for($i=$num1; $i<=$num2; $i++)
	if( $i%2 != 0 ){
		echo $i;
	}

 ?>
<br>
 <?php
print "<p>Ejercicio 5 </p>\n";
$suma=0;
for ($i=1; $i <=20 ; $i++) {
    $suma += $i;
}
echo "La suma de los numeros del 1 al 20 es:".$suma;

  ?>
  <br>
   <?php
  print "<p>Ejercicio 6 </p>\n";
  $sumaPares=0;
  for ($i=2; $i <=20 ; $i+=2) {
      $sumaPares += $i;
  }
  echo "La suma de los numeros pares del 1 al 20 es:".$sumaPares;

    ?>

  </body>

</html>
