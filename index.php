<?php
	session_start();

	if(isset($_SESSION['usuario'])){
		if($_SESSION['usuario']['rol'] == 1){
			header('Location: Main_app/');			
		}
		else{
			if($_SESSION['usuario']['rol']==2){
				header('Location: Main_app/');			
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF.8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<title>PortalWeb</title>
		
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
        <a class="nav-link" >Bievenidos</a>
    </span>
      </li>
      
    </ul>

  </div>
</nav>
		<div class="error">
			<span>Datos de ingreso no validos, Intentelo nuevamente</span>			
		</div>

		<div class="main">
			<form action="" id="formlg">
				<div class="form-group">
					
				<input type="text" class="form-control" name="usuariolg" placeholder="Usuario" required pattern="[A-Za-z0-9_-]{1,15}" />
			</div>
			<div class="form-group">
				
				<input type="password"  class="form-control" name="passlg" placeholder="Contraseña" required pattern="[A-Za-z0-9_-]{1,15}"/>
			</div>
				<input type="submit" class="botonlg" value="Iniciar Sesion" />				
			</form>			
		</div>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>