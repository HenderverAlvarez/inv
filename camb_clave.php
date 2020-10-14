<?php session_start();
include 'funciones.php';
include 'clases.php';

	if (isset($_SESSION['usuario'])) {
		header("Location: pagina_principal.php");
	}

	if ($_SERVER['REQUEST_METHOD']=='POST') {

	$usuario= new usuario($_POST['usuario'], " ");
	$usuario->modificar_contraseña();

	}

require 'views/camb_clave.view.php';
 ?>