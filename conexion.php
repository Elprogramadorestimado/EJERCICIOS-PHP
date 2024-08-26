<?php
$servidor = "localhost";
$usuario="root";
$clave="";
$basededatos ="discoteca";
$tabla01="cliente";
$tabla02="servicios";
$tabla03="reservacion";
   error_reporting(0);
 $conexion = new mysqli($servidor,$usuario,$clave,$basededatos);
 if ($conexion -> connect_errno){
 	echo "nuestro sitio experimenta fallas";
 	exit();
 }
?>
