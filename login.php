<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario= "cinal84@gmail.com";
$ckpass = 1234;

if ($usuario==$ckusuario && $contrasenia==$ckpass   ) {
  header ("location:https://www.potrerodigital.org/" );
} else {
  echo "Incorrecto";
  header ("location:https://www.pixar.com/error404" );
}

 ?>