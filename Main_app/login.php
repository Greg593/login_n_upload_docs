<?php

		
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
		require 'conexion.php';
		sleep(1);	
		session_start();

		$mysqli->set_charset('utf8');

		$usuario = $mysqli->real_escape_string($_POST['usuariolg']);
		$clave = $mysqli->real_escape_string($_POST['passlg']);
		$pass = md5($clave);

		if($nueva_consulta = $mysqli->prepare("SELECT codigo, rol from usuario where codigo = ? AND pass = ?")){
			
			$nueva_consulta->bind_param('ss',$usuario, $pass);
			
			$nueva_consulta->execute();
			
			$resultado = $nueva_consulta->get_result();
			
			if($resultado->num_rows == 1){
				$datos = $resultado->fetch_assoc();
				$_SESSION['usuario']=$datos;
				echo json_encode(array('error' => false,'tipo' => $datos['rol']));
			}
			else{
				echo json_encode(array('error'=> true));
			}
			$nueva_consulta->close();
		}		
	}
	$mysqli->close();
?>



