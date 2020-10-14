<?php session_start();
include 'clases.php';
include 'funciones.php';
$id=$_GET['id'];

$conexion=conectar_bd('localhost', 'inv_bav', 'root', '');

$consulta=$conexion->prepare("SELECT * FROM usuarios WHERE ID = :id");
$consulta->execute(array(":id"=>$id));
$usuario=$consulta->fetch();

require 'views/eliminar.view.php';
?>