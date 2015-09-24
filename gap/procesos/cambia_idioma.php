<?php
 $accion=$_REQUEST['accion'];
 
 switch($accion)
 {
	 case 'Inglés':
	 session_start();
	 $_SESSION['idioma']="en";
	 break;
	 
	 case 'Español':
	 session_start();
	 $_SESSION['idioma']="es";
	 break;
 }
 header('location:../Views/index.php');
?>