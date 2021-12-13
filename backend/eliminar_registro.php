<?php 
  include 'conexion.php';
   
  $id=$_REQUEST['Id'];
  
$consulta=$conexion->query("DELETE FROM pagos where Id='$id'");

  if ($consulta ==TRUE){
      echo '<script>alert("Eliminado satisfactoriamente")</script>';
      echo "<script>location.href='../administrador/admin.php'</script>";
      
  }else{
      echo '.:: Registro NO Eliminado ::.';
  }
?>



