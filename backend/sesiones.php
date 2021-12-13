<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$consulta=mysqli_query($conexion,"SELECT * FROM usuarios WHERE
 Usuario='$usuario' AND Password='$contraseña' ");

if(mysqli_num_rows($consulta) > 0) 
{
    session_start();
    $_SESSION['consulta']="$usuario";
    header("Location: ../administrador/admin.php");
    exit(); 
} else 
{
   echo '<script>alert("Usuario o contraseña incorrectos")</script>';
   echo "<script>location.href='../formulario/formulario.html'</script>";
}
?>








