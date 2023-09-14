<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estructuras de control parte 1</h1>
    <br>
    <h2>Ejercicios</h2>
    <br>
   <?php
   echo "Ejercicio 1.";
   echo "<br>";
   $n = 2;
   if ($n > 0) {
    echo"El número es positivo.";
    } else {
        echo "El número no es positivo.";
    }
    
   
   ?>
   <br>
   <br>
   <?php
   echo "Ejercicio 2.";
   echo "<br>";
   $n = 5;
   if ($n>1 & $n<10) {
    echo "El número es mayor a 1 y menor que 10.";
   } else {
    echo "El número no cumple con la condición.";
   }

   ?> 
   <br>
   <br>
   <?php
   echo "Ejercicio 3.";
   echo "<br>";
   $n = 5;
   if ($n > 10 ||$n < 2 ) {
    echo "El número es válido y cumple con la condición.";
   } elseif ($n < 10 || $n > 2 ) {
    echo "El número es válido pero no cumple con la condición.";
   } else { 
    echo "No es un número válido.";
   }
   ?>
   <br>
   <br>
   <?php
   echo "Ejercicio 4.";
   echo "<br>";
   $numero1 = 8;
   $numero2 = 10;
   if ($numero1 > $numero2) 
   {$suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    echo " Número1 es mayor que Número2.
     La suma es: $suma y la resta es: $resta";
   } elseif ($numero2 > $numero1) {
      $multiplicacion = $numero1 * $numero2;
      $divisionEntera = $numero2 / $numero1;
      $restoDivision = $numero2 % $numero1;
    echo "Número2 es mayor que Número1. <br>
    La multiplicacion es: $multiplicacion, <br>
    La división entera es: $divisionEntera <br>
    y el resto de la división es: $restoDivision";
   }
   else {
    echo "Los numeros ingresados son iguales.";
   }
   ?>
</body>
</html>