<?php session_start();
include 'clases.php';
include 'funciones.php';


$conexion=conectar_bd('localhost', 'inv_bav', 'root', '');


/*Total de puntos con status activo*/
$consulta1=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo WHERE IDconcepto = 1");
$consulta1->execute();

$total_activos=$conexion->query("SELECT FOUND_ROWS() as total");
$total_activos=$total_activos->fetch()['total'];

/*Total de puntos con estatus de dañado*/
$consulta2=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo WHERE IDconcepto = 3");
$consulta2->execute();

$total_dañados=$conexion->query("SELECT FOUND_ROWS() as total");
$total_dañados=$total_dañados->fetch()['total'];

/*Total de puntos con estatus por reparar*/
$consulta3=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo WHERE IDconcepto = 4");
$consulta3->execute();

$total_por_reparar=$conexion->query("SELECT FOUND_ROWS() as total");
$total_por_reparar=$total_por_reparar->fetch()['total'];

/*Total de puntos de prestamo*/
$consulta4=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo WHERE IDconcepto = 2");
$consulta4->execute();

$total_prestamo=$conexion->query("SELECT FOUND_ROWS() as total");
$total_prestamo=$total_prestamo->fetch()['total'];

/*Total de puntos localizados en boveda*/
$consulta5=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo WHERE IDlocalizacion = 2");
$consulta5->execute();

$total_boveda=$conexion->query("SELECT FOUND_ROWS() as total");
$total_boveda=$total_boveda->fetch()['total'];

/*Total de puntos robados*/

$consulta6=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo WHERE IDlocalizacion = 6");
$consulta6->execute();

$total_robo=$conexion->query("SELECT FOUND_ROWS() as total");
$total_robo=$total_robo->fetch()['total'];

/*equipo correctivos*/

$consulta7=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo WHERE IDconcepto = 6");
$consulta7->execute();

$total_corretivo=$conexion->query("SELECT FOUND_ROWS() as total");
$total_corretivo=$total_corretivo->fetch()['total'];

/*Total equipos registrados en el sistema*/

$consulta8=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo");
$consulta8->execute();

$total=$conexion->query("SELECT FOUND_ROWS() as total");
$total=$total->fetch()['total'];

/*Total equipos del BAv*/

$consulta9=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo WHERE IDbanco = 1");
$consulta9->execute();

$total_bav=$conexion->query("SELECT FOUND_ROWS() as total");
$total_bav=$total_bav->fetch()['total'];

/*Total equipos del Credicard*/

$consulta9=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM equipo WHERE IDbanco = 2");
$consulta9->execute();

$total_credicard=$conexion->query("SELECT FOUND_ROWS() as total");
$total_credicard=$total_credicard->fetch()['total'];


require 'views/consolidado.view.php'
 ?>