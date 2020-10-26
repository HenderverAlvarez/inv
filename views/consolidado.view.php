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
				<a title='Cambiar Contraseña' href='camb_clave_i.php'><i class='icon-pencil'></i><span>Cambiar Contraseña</span></a>
				<a title='Modificar informacion' href='modificar_info.php'><i class='icon-info'></i><span>Modificar informacion</span></a>
			</div>	
		</div>

			<div class="min hidden-md-up ">
				<a title='Registrar Usuarios' href='registro.php'><i class='icon-user-plus'></i><span>Registrar usuarios</span></a>
				<a title='Reportes de Seguridad' href='reportes.php'><i class='icon-bank'></i><span>Reportes de Seguridad</span></a>
				<a title='Eliminar Usuarios' href='eliminar_usuario.php'><i class=' icon-user-times'></i><span>Eliminar 
				<a title='Cambiar Contraseña' href='camb_clave_i.php'><i class='icon-pencil'></i><span>Cambiar Contraseña</span></a>
				<a title='Modificar informacion' href='modificar_info.php'><i class='icon-info'></i><span>Modificar informacion</span></a>
			</div>

			<a title="Cerrar Sesion" href="cerrar.php"><i class="icon-logout"></i><span>Cerrar Sesion</span></a>
		</nav> 		

 	</div>


		<!--Aqui comienza el contenido-->


<div class="col-md-9">



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

	<div class="row back mb-2">
				<div class="col-3">
					<a class="btn text-white boton" href="inventario.php"><span class="mr-2">&laquo;</span>Regresar</a>
				</div>
	</div>

		<h2 class="text-center">Situación Consolidada</h2>	

<main class="row main justify-content-end mb-4 mt-3">
	<div class="col-sm-12 col-md-12 modificacion">	
		<div class="row justify-content-arround">	
			<div class="col-6">
						<p class="text-center mb-4">Total de Puntos Activos: <?php echo $total_activos;?></p>
						<p class="text-center mb-4">Total de Puntos Dañados: <?php echo $total_dañados;?></p>
						<p class="text-center mb-4">Total de Puntos Activos: <?php echo $total_por_reparar;?></p>
						<p class="text-center mb-4">Total de Puntos Para prestamo: <?php echo $total_prestamo;?></p>
			</div>

			<div class="col-6">
						<p class="text-center mb-4">Total de Puntos En Boveda: <?php echo $total_boveda;?></p>
						<p class="text-center mb-4">Total de Puntos Hurtados: <?php echo $total_robo;?></p>
						<p class="text-center mb-4">Total de Puntos para corretivo: <?php echo $total_corretivo;?></p>
			</div>

		</div>

		<div class="row">
			<hr>
			<div class="col-6">
				<p class="text-center mb-4">Total de Puntos propiedad del BAV: <?php echo $total_bav;?></p>
			</div>

			<div class="col-6">
				<p class="text-center mb-4">Total de Puntos propiedad de Credicard: <?php echo $total_credicard;?></p>
			</div>
		</div>	
		<hr>
		<div class="row">
			<div class="col">
				<p class="text-center mb-4">Total Puntos de Venta registrados en el sistema:<?php echo $total;?></p>
			</div>
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