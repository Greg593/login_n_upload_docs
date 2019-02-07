<?php
		if ($_FILES['archivo']["error"] > 0)
		  {
		  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
		  }
		else
		  {
		  move_uploaded_file($_FILES['archivo']['tmp_name'],
		  	"upload/" . $_FILES['archivo']['name']);

		  
		}
		header('Location: ../Main_app');	
?>