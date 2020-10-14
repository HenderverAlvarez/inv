<?php session_start();

include 'clases.php';
include 'funciones.php';

$inventario=$_GET['id'];

$conexion=conectar_bd("localhost", "inv_bav", "root", "");
$consulta1=$conexion->prepare("SELECT * FROM inventario WHERE Idinventario = $inventario");
$consulta1->execute();
$inv=$consulta1->fetch();
$id=$inv['Idinventario'];

$equipo=relacion_inventario('inventario','equipo', $id);
$idequipo=$equipo['IDequipo'];

$modelo=relacion_inventario('equipo', 'modelo', $idequipo);
$status=relacion_inventario('equipo', 'concepto', $idequipo);
$localizacion=relacion_inventario('equipo', 'localizacion', $idequipo);
$banco=relacion_inventario('equipo', 'banco', $idequipo);

$cliente=relacion_inventario('inventario', 'cliente', $id);
$usuario=relacion_inventario('inventario', 'usuario', $id);

require 'views/vista_general.view.php';
 ?>