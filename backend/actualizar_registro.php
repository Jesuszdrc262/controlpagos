<?php 
  include 'conexion.php';
   
  $id=$_POST['Id'];
  $folio=$_POST['folio'];
  $lugar=$_POST['lugar'];
  $nombre=$_POST['nombre'];
  $cantidad=$_POST['cantidad'];

  
  $up=$conexion->query("UPDATE pagos SET Folio='$folio', Lugar='$lugar'
  , Nombre='$nombre', Cantidad='$cantidad' WHERE Id='$id'");

 if ($up==TRUE){
     echo '<script>alert("Actualizado correctamente")</script>';
    echo "<script>location.href='../administrador/admin.php'</script>";
  }else{
      echo '.:: Registro NO Actualizado ::.';
  }
?>

