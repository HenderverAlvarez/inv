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
		<?php if($_SESSION['idperfil']==1){echo "<a class='nav-link btn btn-block btn-primary' href=''>Panel Administrativo</a>";}?>
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

			<main class="row main justify-content-end">
				
				<div class="col-sm-12 col-md-12">

					<div class="card">
						
						<div class="row card-block">
							
							<div class="col-12">
								
										<p class="text-left">Serial del equipo: <?php echo $equipo['serial']; ?></p>
										<p class="text-left">Rif: <?php echo $cliente['Rif']; ?></p>
										<p class="text-left">Estatus: <?php echo $status['Descripcion'];?></p>
										<p class="text-left">Modelo: <?php echo $modelo['modelo']; ?></p>
										<p class="text-left">Banco: <?php echo $banco['nombre']; ?></p>
										<p class="text-left">Numero de Afiliacion: <?php echo $inv['Nroafiliacion']; ?></p>			
										<p class="text-left">Numero de terminal: <?php echo $inv['Nroterminal']; ?></p>
										<p class="text-left">Nombre Fantasia: <?php echo $cliente['Nfantasia']; ?></p>
										<p class="text-left">Razon Social: <?php echo $cliente['Razonsocial']; ?></p>				
										<p class="text-left">Localizacion: <?php echo $localizacion['concepto']; ?></p>

										<?php if($_SESSION['idperfil']==1):?>
										<p class="text-left">Ultimo Movimiento Realizado Por: <?php echo $usuario['usuario']; ?></p>
										<p class="text-left">Fecha de modificacion: <?php echo $inv['fecha']; ?></p>
										<?php endif ?>
										<p class="text-left">Serial Sustituto</p>	
										<p class="text-left">Serial Sustituto 2</p>
										<p class="text-left">Serial Sustituto 3</p>														
							</div>

						</div>



						<?php if($_SESSION['idperfil']<3): ?>
						<div class="card-footer">
							<a href="modificar_unidad.php" class="btn btn-success btn-block">Modificar Unidad</a>
						</div>
					    <?php endif; ?>
					</div>

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