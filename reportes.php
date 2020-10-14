<?php session_start();
include 'funciones.php';
include 'clases.php';
$conexion=conectar_bd("localhost", "inv_bav", "root", "");


$mov_pag=16;
$pagina=(isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$inicio=($pagina>1) ? $inicio=($pagina*$eq_pag-$eq_pag) : 0;


$consulta=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM inventario LIMIT $inicio, $mov_pag");
$consulta->execute();
$movimientos=$consulta->fetchall();


if (!$movimientos) {
	echo "<h2>Aun no se han registrado movimientoss</h2>";
}

$total_equipos=$conexion->query("SELECT FOUND_ROWS() as total");
$total_equipos=$total_equipos->fetch()['total'];

$n_paginas=ceil($total_equipos/$mov_pag);

require 'views/reportes.view.php';
 ?>