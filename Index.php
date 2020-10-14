<?php session_start();


if (isset($_SESSION['usuario'])) {
	header('Location: pagina_principal.php');
}

else{
	header("Location: login.php");
}

 ?>