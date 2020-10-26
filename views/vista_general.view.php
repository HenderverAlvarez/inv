<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inventario de Puntos de Venta</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<link rel="shortcut icon" type="image/png" href="img/favicon.jpg">

</head>

<body>


	<div class="container-fluid">
	
						
<div class="row"> <!--este row contiene tanto el menu como el contenido-->
 <!--Aqui se crea el menu -->

 	<div class="nav col-2 col-sm-auto">

		<nav class="nav d-flex d-sm-block flex-wrap justify-content-center">
			<div class="titulo"><h4 class="text-center titulo"><i class="icon-menu"></i><span>Menu</span></h4></div>
			<a title="Inicio" href="pagina_principal.php"><i class="icon-home"></i><span>Inicio</span></a>
			

			<a title="Inventario" href="inventario.php"><i class="icon-bookmark-empty"></i><span>Inventario</span></a>

		<div class="hidden-md-down">
			<?php if($_SESSION['idperfil']==1){echo 

			"
			<a title='Panel Administrativo' class='' href='#panel' aria-expanded='false' aria-controls='panel' data-toggle='collapse'><i class='icon-cog-alt'></i><span>Panel Administrativo </span></a>

				<div class='collapse' id='panel'>	

				<a title='Registrar Usuarios' href='registro.php'><i class='icon-user-plus'></i><span>Registrar usuarios</span></a>
				<a title='Reportes de Seguridad' href='reportes.php'><i class='icon-bank'></i><span>Reportes de Seguridad</span></a>
				<a title='Eliminar Usuarios' href='eliminar_usuario.php'><i class=' icon-user-times'></i><span>Eliminar Usuarios</span></a>	

				</div>	


			"

			;}?>
			<a title="Gestion de Usuarios" href='#user' aria-expanded='false' aria-controls='user' data-toggle='collapse'><i class="icon-user"></i><span>Gestion de usuarios</span></a>

			<div class='collapse' id='user'>	
				<a title='Cambiar Contraseña' href='camb_clave_i.php'><i class='icon-lock'></i><span>Cambiar Contraseña</span></a>
				<a title='Modificar informacion' href='modificar_info.php'><i class='icon-info'></i><span>Modificar informacion</span></a>
			</div>	
		</div>

			<div class="min hidden-md-up ">
				<a title='Registrar Usuarios' href='registro.php'><i class='icon-user-plus'></i><span>Registrar usuarios</span></a>
				<a title='Reportes de Seguridad' href='reportes.php'><i class='icon-bank'></i><span>Reportes de Seguridad</span></a>
				<a title='Eliminar Usuarios' href='eliminar_usuario.php'><i class=' icon-user-times'></i><span>Eliminar 
				<a title='Cambiar Contraseña' href='camb_clave_i.php'><i class='icon-lock'></i><span>Cambiar Contraseña</span></a>
				<a title='Modificar informacion' href='modificar_info.php'><i class='icon-info'></i><span>Modificar informacion</span></a>
			</div>

			<a title="Cerrar Sesion" href="cerrar.php"><i class="icon-logout"></i><span>Cerrar Sesion</span></a>
		</nav> 		

 	</div>


		<!--Aqui comienza el contenido-->


<div class="col-sm-10 col-md-9">
				
			<!--Fila Para El header-->
				<div class="row header justify-content-end">					
					<div class="col-md-12">
							<div class="row jumbotron jumbo">
									<div class="col-md-12">
										<h1 class="bav">Banco Agricola De Venezuela</h1>
										<hr>
										<p>Inventario de puntos de venta</p>
									</div>
							</div>					
					</div>		
				</div>	
				<!--Fila Para contenido Principal-->
																	<!--Aqui van las cards para la vista general del inventario-->

			<main class="row main justify-content-end">
				
				<div class="col-sm-12 col-md-12">
					<div class="card">

					<div class="row back">
						<div class="col-3">
							<a class="btn text-white boton" href="inventario.php"><span class="mr-2">&laquo;</span>Regresar</a>
						</div>
					</div>
						
						<div class="row card-block">
							
							<div class="general-col col-6">
								
										<p class="text-left general">Serial del equipo:</p>
										<p class="text-left general">Rif:</p>
										<p class="text-left general">Estatus:</p>
										<p class="text-left general">Modelo:</p>
										<p class="text-left general">Banco:</p>
										<p class="text-left general">Numero de Afiliacion:</p>			
										<p class="text-left general">Numero de terminal:</p>
										<p class="text-left general">Nombre Fantasia:</p>
										<p class="text-left general">Razon Social:</p>				
										<p class="text-left general">Localizacion:</p>
										<?php if($_SESSION['idperfil']==1):?>
										<p class="text-left general">Ultimo Movimiento Realizado Por:</p>
										<p class="text-left general">Fecha de modificacion:</p>
										<?php endif ?>
										<p class="text-left general">Serial Sustituto:</p>	
										<p class="text-left general">Serial Sustituto 2:</p>
										<p class="text-left general">Serial Sustituto 3:</p>													
							</div>

							<div class="general-col col-6">
								<p class="general"><?php echo $equipo['serial'];?></p>
								<p class="general"><?php echo $cliente['Rif'];?></p>
								<p class="general"><?php echo $status['Descripcion'];?></p>
								<p class="general"><?php echo $modelo['modelo'];?></p>
								<p class="general"><?php echo $banco['nombre'];?></p>
								<p class="general"><?php echo $inv['Nroafiliacion'];?></p>
								<p class="general"><?php echo $inv['Nroterminal'];?></p>
								<p class="general"><?php echo $cliente['Nfantasia'];?></p>
								<p class="general"><?php echo $cliente['Razonsocial'];?></p>
								<p class="general"><?php echo $localizacion['concepto']; ?></p>
								<?php if($_SESSION['idperfil']==1):?>
				 						<p class="general"><?php echo $usuario['usuario']; ?></p>
				 						<p class="general"><?php echo $inv['fecha']; ?></p>
								<?php endif ?>
								<p class="general"><?php echo $equipo['Serialsustituto1'];?></p>	
								<p class="general"><?php echo $equipo['Serialsustituto2'];?></p>
								<p class="general"><?php echo $equipo['Serialsustituto3'];?></p>	

							</div>

						</div>



						<?php if($_SESSION['idperfil']<3): ?>
						<div class="card-footer">
							<a href="modificar_unidad.php" class="btn boton btn-block"><i class="icon-pencil mr-2"></i>Modificar Unidad</a>
						</div>
					    <?php endif; ?>
					</div>

				</div>
			</main>

		</div>
	</div>

	</div>

			<div class="row footer bg-inverse">
				<div class="col-12">
					<p class="text-center text-white my-3" > Henderver Alvarez || Banco Agricola de Venezuela || UPTAMCA 2020 </p>
				</div>		
			</div>


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>