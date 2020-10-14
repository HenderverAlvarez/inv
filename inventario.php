<?php session_start();
include 'funciones.php';
include 'clases.php';

$conexion=conectar_bd("localhost", "inv_bav", "root", "");

$eq_pag=8;
$pagina=(isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
$inicio=($pagina>1) ? $inicio=($pagina*$eq_pag-$eq_pag) : 0;


$consulta=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM inventario LIMIT $inicio, $eq_pag");
$consulta->execute();
$puntos=$consulta->fetchall();


if (!$puntos) {
	echo "<h2>Aun no se han registrado puntos</h2>";
}

$total_equipos=$conexion->query("SELECT FOUND_ROWS() as total");
$total_equipos=$total_equipos->fetch()['total'];

$n_paginas=ceil($total_equipos/$eq_pag);

require 'views/inventario.view.php';
 ?>