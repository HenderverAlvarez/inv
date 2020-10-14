<?php session_start();
include 'clases.php';
include 'funciones.php';
$errores="";

//verificamos que no exista una sesion activa


if ($_SERVER['REQUEST_METHOD'] == 'POST') { // verificamos si se han enviado los datos por el metodo post
	
	$usuario=filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING); // les asignamos los valores a las variables
	$password=$_POST['contra'];
	$password2=$_POST['contra2'];
	$fecha_nac=$_POST['fecha'];
	$cedula=$_POST['cedula'];
	$perfil=$_POST['perfil'];


	if (empty($usuario) || empty($password) || empty($password2) || empty($fecha_nac) || empty($cedula) || empty($perfil)) { // se verifica que ningun campo este vacio

		$errores.="<li>Ingresa toda la informacion Solicitada</li>";

	}else{

		$conexion=conectar_bd('localhost', 'inv_bav', 'root', '');

		//preparamos una cosulta para verificar que el nombre de usuario no este en uso

		$consulta=$conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario or cedula = :cedula");
		$consulta->execute(array(":usuario" => $usuario, ":cedula" => $cedula));
		$resultado=$consulta->fetch();

		if ($resultado != false) { // si esta registrado se muestra una alerta
			
			$errores.="<li>Este Nombre de usuario o cedula ya se encuentra en uso</li>";

		}


		// encriptamos las contraseñas insertadas por el usuario
		$password=hash("sha512", $password);
		$password2=hash("sha512", $password2);

			if ($password != $password2) { // se verifica que sean iguales las contraseñas
				$errores.="<li> Las contraseñas no coinciden </li>";
			}
	}

	if (!$errores) { // si se aprobaron todas las validaciones se inserta en la bd el usuario
		
		$consulta2=$conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
		$consulta2->execute(array(":usuario" => $_SESSION['usuario']));
		$user=$consulta2->fetch();
		$contraseña=$user['pass'];

		$usuarioA=new Administrador($_SESSION['usuario'] , $contraseña);
		$usuarioA->registrar_Usuarios($usuario, $password, $perfil, $cedula, $fecha_nac);

		header("Location: login.php");
	}

}

require 'views/registro.view.php';
 ?>