<?php session_start();
include 'funciones.php';

if (isset($_SESSION['usuario'])) {

	header("Location: index.php");
}


$idusuario="";
$errores="";

if ($_SERVER['REQUEST_METHOD']=='POST') {
	
	
	$cedula=$_POST['cedula'];
	$nac=$_POST['nacimiento'];

	if (empty($cedula) || empty($nac)) {
	 	$errores.="<li>Ingresa correctamente los datos solicitados</li>";
	}

	$conexion=conectar_bd("localhost", "inv_bav", "root", "");

	$consulta=$conexion->prepare("SELECT * FROM usuarios WHERE cedula = :cedula");
	$consulta->execute(array(":cedula" => $cedula));
	$resultado=$consulta->fetch();

	if($resultado == false){
		$errores.="<li class='text-center'>Este Numero de cedula no esta registrado en el sistema</li>";

	}else{
		$consulta2=$conexion->prepare("SELECT * FROM usuarios WHERE cedula = :cedula and nacimiento = :nac");
		$consulta2->execute(array(":cedula" => $cedula, ":nac" => $nac));
		$resultado2=$consulta2->fetch();

	
	if($resultado2 == false){
		$errores.="<li class='text-center'>Los Datos ingresados son incorrectos</li>";
	}
	}


	if (!$errores) { // quedamos resilviendo esto 
		$idusuario=$resultado['ID'];
	}

}








require 'views/recuperacion.view.php';
 ?>