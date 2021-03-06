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
	
						
<div class="row"> <!--este row contiene tanto el menu como el contenido-->
 <!--Aqui se crea el menu -->

	<nav class="nav col-3 mt-3 mb-3 flex-column bg-inverse">
		<h4 class="text-center mt-4 text-white">Funciones</h4>
		<a class="nav-link btn btn-block btn-primary" href="pagina_principal.php">Inicio</a>
		<a class="nav-link btn btn-block btn-primary" href="inventario.php">Inventario</a>
		<?php if($_SESSION['idperfil']==1){echo "<a class='nav-link btn btn-block btn-primary' href='panel_a.php'>Panel Administrativo</a>";}?>
		<a class="nav-link btn btn-block btn-primary" href="gestion_usuarios.php">Gestion de usuario</a>
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
	<h3 class="text-center">Confirmacion de Datos</h3>
<hr>

			<main class="row main justify-content-around">
				<div class="col-8">
					<p class="text-center mb-5">Los datos del usuario mostrados a continuacion seran eliminados del sistema, ¿esta seguro que desea continuar?</p>
					<form action="<?php	echo $_SERVER['PHP_SELF'];?>" method="POST">

						<div class="row">
							<div class="col-6">
								<div class="form-group">
								<input class="form-control" readonly type="text" name="usuario" placeholder="Usuario: <?php echo $usuario['usuario']?>">	
								</div>
							</div>

							<div class="col-6">
							<div class="form-group">	
								<input class="form-control" readonly type="text" name="cedula" placeholder="Cedula: <?php echo $usuario['cedula']?>">	
							</div>								
							</div>
						</div>

						<div class="row">
							<div class="col-6">
								<div class="form-group">
								<input class="form-control" readonly type="text" name="usuario" placeholder="F. Nacimiento: <?php echo $usuario['nacimiento']?>">	
								</div>
							</div>

							<div class="col-6">
							<div class="form-group">	
								<input class="form-control" readonly type="text" name="cedula" placeholder="Nivel de Seguridad: <?php echo $usuario['IDperfil']?>">	
							</div>								
							</div>
						</div>
						

						<div class="row justify-content-around">
							<div class="col-6">
								<a href="eliminar_usuario.php" class="btn btn-warning btn-block">&laquo; Regresar</a>
							</div>
							<div class="col-6">
								<a href="eliminar_user.php?id=<?php echo $id;?>" class="btn btn-success btn-block">Confirmar &raquo;</a>	
							</div>
						
						</div>
						
					</form>
				</div>
			</main>

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