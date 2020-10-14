<?php session_start();
include 'funciones.php';
include 'clases.php';
$errores='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$usuario=$_POST['usuario'];
	$cedula=$_POST['cedula'];

	if ($usuario == $_SESSION['usuario']) {
		$errores.="<li class='text-center'>No puedes eliminar el usuario de la sesion actual</li>";
	}

	$conexion=conectar_bd('localhost', 'inv_bav', 'root', '');
	$consulta=$conexion->prepare("SELECT * FROM usuarios WHERE usuario = :user and cedula = :cedula");
	$consulta->execute(array(":user"=>$usuario, ":cedula"=>$cedula));
	$resultado=$consulta->fetch();

	if (!$resultado){$errores.="<li class='text-center'>El usuario o la cedula ingresada no estan registrados en el sistema</li>";}

	if (!$errores){
		$id=$resultado['ID'];
		header("Location: eliminar.php?id=$id");}
}


require 'views/eliminar_usuario.view.php';
 ?>