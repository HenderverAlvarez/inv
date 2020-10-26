<?php session_start();
include 'clases.php';
include 'funciones.php';

$errores="";
if ($_SERVER['REQUEST_METHOD']=='POST'){
	
	$nueva_cedula=$_POST['cedula'];
	$nueva_fecha=$_POST['fecha'];

	if (!empty($nueva_fecha) || !empty($nueva_cedula)){

		if(!empty($nueva_fecha) && !empty($nueva_cedula)){	
		filter_var($nueva_cedula, FILTER_SANITIZE_STRING);		
		$conexion=conectar_bd("localhost", "inv_bav", "root", '');
		$consulta=$conexion->prepare("UPDATE usuarios SET cedula = :cedula, nacimiento = :fecha WHERE ID = :id");
		$consulta->execute(array(":cedula" => $nueva_cedula, ":fecha"=>$nueva_fecha, ":id"=>$_SESSION['ID']));
		}
		else if (!empty($nueva_cedula) && empty($nueva_fecha)){
		filter_var($nueva_cedula, FILTER_SANITIZE_STRING);		
		$conexion=conectar_bd("localhost", "inv_bav", "root", '');
		$consulta=$conexion->prepare("UPDATE usuarios SET cedula = :cedula WHERE ID = :id");
		$consulta->execute(array(":cedula" => $nueva_cedula, ":id"=>$_SESSION['ID']));
		}else if(empty($nueva_cedula) && !empty($nueva_fecha)){	
		$conexion=conectar_bd("localhost", "inv_bav", "root", '');
		$consulta=$conexion->prepare("UPDATE usuarios SET nacimiento = :fecha WHERE ID = :id");
		$consulta->execute(array(":fecha"=>$nueva_fecha, ":id"=>$_SESSION['ID']));
		}
	
	}else{$errores.="<li class='text-center'>Ingresa al menos uno de los datos solicitados</li>";}

}

require 'views/modificar_info.view.php';
 ?>