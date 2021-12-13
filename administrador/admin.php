<?php 

	$conexion=mysqli_connect('localhost','root','','bd_sistema_control');



 ?>
<?php
session_start();
if(!isset($_SESSION["consulta"])) {
    
    echo '<script>alert("Sesion no iniciada")</script>';
   echo "<script>location.href='../index.html'</script>";
}
?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Prologue by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/Estilos_Tablas.css">
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/usuario2.png" alt="" /></span>
							<h1 id="title"><?php $usuario = $_SESSION['consulta']; echo "<h1> $usuario </h1>"; ?></h1>
							<p>Bienvenid@ al sistema</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link"><span class="icon solid fa-cog">Respaldo</span></a></li>
								<li><a href="#portfolio" id="portfolio-link"><span class="icon solid fa-laptop">Lista de registros</span></a></li>
								<li><a href="#about" id="about-link"><span class="icon solid fa-folder">Reporte de datos</span></a></li>
								
							</ul>
						</nav>


						<a href="../backend/salir.php" class="image avatar49"><img src="images/Cerrar.png" alt="" >

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="http://facebook.com" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">



							<header>
								<h2 class="alt"><strong>Respaldo de base de datos</strong></h2>
								<p>Para garantizar una mayor seguridad en sus registros<br />
								presentamos la opción de generar un respaldo de la base de datos, simplemente haga clic en el botón que se muestra abajo.</p>
							</header>

							<footer>
								<a href="../backend/respaldo.php" class="button special2">generar respaldo</a>
							</footer>

						</div>
					</section>


				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Lista de registros</h2>
							</header>

							
								<table class="content-table">
		  <thead>
		    <tr>
		      <th>Id</th>
		      <th>Folio</th>
		      <th>Lugar</th>
		      <th>Nombre</th>
		      <th>Cantidad</th>
		      <th colspan="5">    Seleccione una opcion</th>	
		  
		    </tr>
		  </thead>
			
		</tr>

		<?php 
		$sql="SELECT * from pagos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

					<tbody>
		    <tr>
		      <td><?php echo $mostrar['Id'] ?></td>
		      <td><?php echo $mostrar['Folio'] ?></td>
		      <td><?php echo $mostrar['Lugar'] ?></td>
		      <td><?php echo $mostrar['Nombre'] ?></td>
		      <td><?php echo $mostrar['Cantidad'] ?></td>
		      <td><a class="button special" href="../actualizar/formulario_actualizar.php?Id=<?php echo $mostrar['Id'] ?>">actualizar</a></td>
            	<td><a class="button special"  href="../backend/eliminar_registro.php?Id=<?php echo $mostrar['Id'] ?>">borrar</a></td>
		    </tr>
		  </tbody>
	<?php 
	}
	 ?>
	</table>
           </center>

<br><br><br><br><br><br>


							

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>Reporte de datos</h2>
							</header>

							<a  class="image featured"><img src="images/pic09.png" alt="" /></a>

							<p>Con el objetivo de que se pueda contar con los registros de su base de datos le permitimos generar un reporte en formato PDF, el cual contiene los registros de pagos pertenecientes a la tabla principal de la base de datos, esto con el fin de volver más práctica y sencilla la manera de acceder a su información y en caso de necesitarl consultarla tenerla a la mano con un simple clic.</p>


							
							<a href="../backend/reporte.php" class="button special2">descargar reporte</a>

						</div>
					</section>
					<br>

				

		<!-- Footer --><br><br><br>
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Sistema control de pagos Derechos reservados.</li><li>Diseñado por: Jesús Campos y Karol Araico</a></li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>