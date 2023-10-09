<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Tarea 5 ejercicios de Matrices</h1>
<?php
print "<p>Ejercicio 1 </p>\n";
$primerosPares = [ 2,4,6,8,10,12,14,16,18,20];
foreach ($primerosPares as $numero) {
  print($numero. "<br>");
}
?>
<br>
<?php
print "<p>Ejercicio 2 </p>\n";
$varios = ["Pedro", "Ana", 34, 1];
print_r($varios);
 ?>
 <br>
 <?php
print "<p>Ejercicio 3 </p>\n";
$datos=[
  'Nombre:'=> "Pedro",
  'Apellido:'=> "Torres",
  'Direccion:'=> "Av. Mayor 3703",
  'Telefono:'=> 1122334455,
];
foreach ($datos as $indice => $value) {
  print ($indice."<br>");
}
  ?>
<br>
<?php
print "<p>Ejercicio 4 </p>\n";

$arrayciu = [0 => "Madrid", 1 => "Barcelona", 2 => "Londres", 3 => "New_York", 4 => "Los_Angeles", 5=> "Chicago"];

print "<p> La ciudad con el indice 0 es $arrayciu[0]</p>\n";
print "<p> La ciudad con el indice 1 es $arrayciu[1]</p>\n";
print "<p> La ciudad con el indice 2 es $arrayciu[2]</p>\n";
print "<p> La ciudad con el indice 3 es $arrayciu[3]</p>\n";
print "<p> La ciudad con el indice 4 es $arrayciu[4]</p>\n";
print "<p> La ciudad con el indice 5 es $arrayciu[5]</p>\n";
 ?>
<br>
<?php
print "<p>Ejercicio 5 </p>\n";
$ciudades = array ("MD"=>"Madrid", "BCL" => "Barcelona", "LD"  => "Londres",  "NY"  => "New_York",
            "LA"  => "Los_Angeles",
            "CCG" => "Chicago",
);
foreach ($ciudades as $indice => $ciudad) {
    echo "El índice de $ciudad es $indice.<br>";
}


 ?>




  </body>
</html>
