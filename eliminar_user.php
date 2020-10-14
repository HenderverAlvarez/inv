<?php session_start();

include 'clases.php';
include 'funciones.php';
$id=$_GET['id'];

$admin=new Administrador($_SESSION['usuario'], '');
$admin->eliminarUsuario($id);
header("Location: index.php");
 ?>