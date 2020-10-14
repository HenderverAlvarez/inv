<?php session_start();

include 'clases.php';
require 'funciones.php';
$errores="";

if (isset($_SESSION['usuario'])) {
	header("Location: index.php");
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario= new Usuario($_POST['usuario'], $_POST['cont']);
	$errores=$usuario->validar();
}


require 'views/login.view.php';

 ?>