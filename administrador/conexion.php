<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sistema_control";



$conexion = mysqli_connect($servername,$username,$password,$dbname) 
or die ("No se pudo conectar");

if($conexion){
	echo"";
}else{
	echo "No se pudo conectar";
}

?>