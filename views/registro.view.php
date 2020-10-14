<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inventario de Puntos de Venta</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>

<body>


	<div class="container">
	
						
<div class="row mb-5"> <!--este row contiene tanto el menu como el contenido-->
 <!--Aqui se crea el menu -->

	<nav class="nav col-3 mt-3 mb-3 flex-column bg-inverse">
		<h4 class="text-center mt-4 text-white">Funciones</h4>
		<a class="nav-link btn btn-block btn-primary" href="pagina_principal.php">Inicio</a>
		<a class="nav-link btn btn-block btn-primary" href="inventario.php">Inventario</a>
		<?php if($_SESSION['idperfil']==1){echo "<a class='nav-link btn btn-block btn-primary' href='panel_a.php'>Panel Administrativo</a>";}?>
		<a class="nav-link btn btn-block btn-primary" href="gestion_usuarios.php">Gestion de usuarios</a>
		<a class="btn btn-block btn-primary" href="cerrar.php">Cerrar Sesion</a>
	</nav>
	


		<!--Aqui comienza el contenido-->


<div class="col-md-9 mt-3 mb-3">



								<!--Fila Para El header-->
<div class="row header justify-content-end">
				
				<div class="col-md-12">

					<div class="row jumbotron bg-info">
						<div class="col-md-10">

						<h1 class="bav mb-4">Banco Agricola De Venezuela</h1>
						<hr>
						<p>Inventario de puntos de venta</p>

						</div>

					<div class="col-md-2 hidden-sm-down align-self-center">
						<div class="logotipo">
							<img src="img/bav.jpg" class="img-thumb img-fluid">
						</div>
					</div>

					</div>					

				</div>		




			</div>
						<!--Fila Para contenido Principal-->
																	<!--Aqui van las cards para la vista general del inventario-->


			<div class="row login justify-content-center mb-5">


																	<!--Formulario de registro-->
				<div class="col-md-8 align-self-center formulario_login mt-4">
							
					<h3 class="title text-center mb-3">Registro de usuarios</h3>
					<hr>

					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="form">
						
						<div class="row">

							<div class="form-group mb-3 col">
								<label for="usuario">Indique un nombre de usuario</label> <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuario">
							</div>

	
						</div>

						<div class="row">

							<div class="form-group mb-3 col-6">
								<label for="cedula">Numero de cedula</label> <input class="form-control" type="number" name="cedula" id="cedula" placeholder="Cedula">
							</div>	

							<div class="form-group mb-3 col-6">
								<label for="fecha">Fecha de nacimiento</label> <input class="form-control" type="date" name="fecha" id="fecha">
							</div>

						</div>

						<div class="row">

						<div class="form-group mb-3 col-6">
							<label for="cont">Escriba su Contraseña</label> <input class="form-control" type="password" name="contra" id="usuario" placeholder="Contraseña">
						</div>

						<div class="form-group mb-3 col-6">
							<label for="cont">Repita su Contraseña</label> <input class="form-control" type="password" name="contra2" id="usuario" placeholder="Contraseña">
						</div>						
						
						</div>

						<div class="row">
							
							<div class="form-group mb-3 col">

								<label for="perfil">Tipo de perfil</label>
								<select name="perfil" class="form-control">
									<option value="1">Administrador</option>
									<option value="2">Analista</option>
									<option value="3">Jefe de area</option>
								</select>

							</div>

						</div>


						




							<hr>

						<div class="form-group mb-4">
							<button class="btn btn-primary btn-block" value="Enviar">
								Confirmar
							</button>
						</div>

						<?php 
							
							if ($errores) {
								echo "						
								<div class='errores mb-4'>
								
								$errores

								</div>";
							}

						 ?>
					</form>

				</div>




			</div>

		</div>
	</div>





			







	</div>
			<div class="row footer bg-inverse mt-5">
				<div class="col-12">
					<p class="text-center text-white my-3" > Henderver Alvarez || Banco Agricola de Venezuela || UPTAMCA 2020 </p>
				</div>		
			</div>



	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>