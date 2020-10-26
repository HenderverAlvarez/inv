<?php session_start();
include 'funciones.php';
include 'clases.php';

$errores="";

	if ($_SERVER['REQUEST_METHOD']=='POST') {

	$conexion = conectar_bd('localhost', 'inv_bav', 'root', '');
	$consulta = $conexion->prepare("SELECT * FROM usuarios WHERE ID = :id");
	$consulta->execute(array(':id'=> $_SESSION['ID']));
	$usuario=$consulta->fetch();
	$password=$usuario['pass'];


	$pass_n=$_POST['pass_n'];	
	$pass_n2=$_POST['pass_n2'];
	$pass_a=$_POST['pass_a'];
	

	if (!empty($pass_n) && !empty($pass_n2) && !empty($pass_a)){
	
		$pass_a=hash("SHA512", $pass_a);

		if ($pass_a == $password) {

		$pass_n=hash("SHA512", $pass_n);
		$pass_n2=hash("SHA512", $pass_n2);

		if ($pass_n == $pass_n2) {

		$usuario = new usuario($_SESSION['usuario'], " ");
		$usuario->modificar_contraseña();	

		}else{
			$errores.="<li class='text-center'>la contraseña nueva y su confirmacion no coinciden</li> <br>"; 
		}
	}else{
		$errores.="<li class='text-center'>La contraseña introducida no coincide con la registrada en la base de datos</li>";
	}
	}else{$errores.="<li class='text-center'>Ingresa toda la informacion Solicitada</li> <br>"; }}

require 'views/camb_clave_i.view.php';
 ?>