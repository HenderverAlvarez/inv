<?php session_start(); 
require 'clases.php';
include 'funciones.php';

/*tomamos por GEt los datos*/
 $serial=$_GET['serial'];
 $rif=$_GET['rif'];
 $modelo=$_GET['idmodelo'];
 $banco=$_GET['idbanco'];
 $afiliacion=$_GET['afiliado'];
 $n_terminal=$_GET['terminal'];
 $fantasia=$_GET['fantasia'];
 $razonSocial=$_GET['razon'];
 $localizacion=$_GET['idlocalizacion'];
 $status=$_GET['idstatus'];
 $realizadopor=$_GET['realizadopor'];

 if (isset($_GET['serial_sustituto1'])) { $serial_sustituto1=$_GET['serial_sustituto1'];}else{$serial_sustituto1=0;} 
 if (isset($_GET['serial_sustituto2'])) { $serial_sustituto2=$_GET['serial_sustituto2'];}else{$serial_sustituto2=0;} 
 if (isset($_GET['serial_sustituto3'])) { $serial_sustituto3=$_GET['serial_sustituto3'];}else{$serial_sustituto3=0;} 


 /*Validamos que ninguna campo este vacio*/
 if (!empty($serial) && !empty($rif) && !empty($modelo) && !empty($banco) && !empty($afiliacion) &&  !empty($n_terminal) && !empty($fantasia) && !empty($razonSocial) && !empty($localizacion) && !empty($status) && !empty($realizadopor) && !empty($realizadopor)){

/*Se crea un equipo con los datos  pasados*/
$unidad = new Equipo($serial,$rif,$modelo,$banco,$afiliacion,$n_terminal,$fantasia,$razonSocial,$localizacion,$status,$realizadopor,$serial_sustituto1,$serial_sustituto2,$serial_sustituto3);

/*Se registra el equipo en la base de datos*/
$unidad->registrar_unidad($serial, $rif, $modelo, $banco, $afiliacion, $n_terminal, $fantasia, $razonSocial, $localizacion, $status, $serial_sustituto1, $serial_sustituto2, $serial_sustituto3, $realizadopor);

	

	$fec=getdate();
	$mes=$fec['mon'];
	$dia=$fec['mday'];
	$año=$fec['year'];
	$fecha="$dia/$mes/$año";



	
	$mov=new Inventario($serial,$fecha, $realizadopor, $n_terminal, $afiliacion, "registro");
	$mov->guardar_mov($serial, $fecha, $realizadopor, $n_terminal, $afiliacion, "registro");	
	header("Location: index.php");

	

	
 }

 ?>