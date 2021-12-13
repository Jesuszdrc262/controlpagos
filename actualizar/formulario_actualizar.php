<?php 
  include '../backend/conexion.php';

  $id=$_REQUEST['Id'];

  //echo 'Valor de ID: '.$id;
  
  $sel=$conexion->query("select * from pagos where Id='$id'");

  if ($mostrar=$sel->fetch_assoc())
  {
      
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar registro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/fondo.png">
		</div>
		<div class="login-content">
			<form action="../backend/actualizar_registro.php" method="POST">
			
				<h2 class="title">Actualizar registro</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Folio</h5>
           		   		<input type="text" class="input" name="folio" value="<?php echo $mostrar['Folio'] ?>">
           		   </div>
           		</div>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Lugar</h5>
           		   		<input type="text" class="input" name="lugar" value="<?php echo $mostrar['Lugar'] ?>">
           		   </div>
           		</div>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nombre</h5>
           		   		<input type="text" class="input" name="nombre" value="<?php echo $mostrar['Nombre'] ?>">
           		   </div>
           		   <input type="hidden" name="Id" value="<?php echo $mostrar['Id'] ?>">
           		</div>


           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Cantidad</h5>
           		   		<input type="text" class="input" name="cantidad" value="<?php echo $mostrar['Cantidad'] ?>">
           		   </div>
           		</div>


           		
            	
            	<input type="submit" class="btn" value="Actualizar">
            </form>
            <br><br><br><br>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
