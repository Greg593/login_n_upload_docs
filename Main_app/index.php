<?php
session_start();

/*	if(isset($_SESSION['usuario'])){
if($_SESSION['usuario']['rol'] != 2){
header('Location: ../Admin/');
}
}
else{
header('Location: ../../');			
}*/
//header('Location: ../index.php')
?>




<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Seguridad Informática</title>		
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Carga de Archivos</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<span class="navbar-text">
						<a class="nav-link" href="salir.php">Cerrar Sesión</a>
					</span>
				</li>

			</ul>
		</div>
	</nav>

	<div class="main">
		<form action="subir.php" id="formlg" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<h2 class="alert-heading">Archivo</h2>
				
				<input type="file" class="form-control-file" name="archivo" id="archivo"></input>
			</div>
			<input type="submit" class="botonlg" value="Subir archivo" />
		</form>
	</div>




	<!-- <button type="button" class="btn btn-warning" href="salir.php">Cerrar Sesion</button> -->
	<!-- <a href="salir.php">Cerrar Sesion</a> -->		

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>		
</body>
</html>

