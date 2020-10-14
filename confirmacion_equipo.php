<?php session_start();
include 'funciones.php';
include 'clases.php';

$errores='';

/*En este archivo preparamos todo para guardar el equipo una vez se aprueba la confirmacion*/

/*Tomamos por GET la informacion*/
 $serial=$_GET['serial'];
 $rif=$_GET['rif'];
 $modelo=$_GET['modelo'];
 $banco=$_GET['banco'];
 $afiliacion=$_GET['afiliado'];
 $n_terminal=$_GET['terminal'];
 $fantasia=$_GET['fantasia'];
 $razonSocial=$_GET['razon'];
 $localizacion=$_GET['localizacion'];
 $status=$_GET['status'];
 if (isset($_GET['serial_sustituto1'])) { $serial_sustituto1=$_GET['serial_sustituto1'];}else{$serial_sustituto1=0;} 
 if (isset($_GET['serial_sustituto2'])) { $serial_sustituto2=$_GET['serial_sustituto2'];}else{$serial_sustituto2=0;} 
 if (isset($_GET['serial_sustituto3'])) { $serial_sustituto3=$_GET['serial_sustituto3'];}else{$serial_sustituto3=0;} 

 $realizadopor=$_SESSION['ID'];

/*Validamos que ningun campo este vacio*/
 if (!empty($serial) && !empty($rif) && !empty($modelo) && !empty($banco) && !empty($afiliacion) &&  !empty($n_terminal) && !empty($fantasia) && !empty($razonSocial) && !empty($localizacion) && !empty($status) && !empty($realizadopor) && !empty($realizadopor)){

/*Se cambian los valores de los campos por sus respectivas ID's en la base de datos*/
 	if ($localizacion == 'Comercio') { $idlocalizacion=1;}
	else if($localizacion == 'Boveda'){ $idlocalizacion=2;}
	else if($localizacion == 'Agencia'){ $idlocalizacion=3;}
	else if($localizacion == 'Reparacion'){ $idlocalizacion=4;}
	else if($localizacion == 'RRHHA BAV'){ $idlocalizacion=5;}
	else if($localizacion == 'Robo/hurto'){ $idlocalizacion=6;}
	else if($localizacion == 'Credicard'){ $idlocalizacion=7;}
	else if($localizacion == 'Credicard Draza'){ $idlocalizacion=8;}


	if ($banco == 'BAV'){$idbanco=1;}
	else if($banco == 'Credicard'){$idbanco=2;}
	else if($banco == 'Aliado'){$idbanco=3;}

	if($modelo =='PAX S90 (GPRS) AGRICOLA 840'){$idmodelo=1;}
	else if ($modelo == 'PAX S90 (DIAL) AGRICOLA 840') {$idmodelo=2;}

	if($status =='Activo'){$idstatus=1;}
	else if($status =='Prestamo'){$idstatus=2;}
	else if($status =='Desafiliado'){$idstatus=3;}
	else if($status =='Por Reparar'){$idstatus=4;}
	else if($status =='Hurto'){$idstatus=5;}
	else if($status =='POS corretivo'){$idstatus=6;}
	

/*Se escribe la direccion a la que se redireccionara al usuario al presionar el boton de confirmar*/
$direccion="guardar_equipo.php?serial=".$serial."&rif=".$rif."&idmodelo=".$idmodelo."&idbanco=".$idbanco."&afiliado=".$afiliacion."&terminal=".$n_terminal."&fantasia=".$fantasia."&razon=".$razonSocial."&idlocalizacion=".$idlocalizacion."&idstatus=".$idstatus."&realizadopor=".$realizadopor;

 }




require 'views/confirmacion_equipo.view.php';
 ?>
