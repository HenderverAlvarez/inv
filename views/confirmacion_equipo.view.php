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

			<main class="row main justify-content-around">
				
					<div class="col-12">
						
									
									
						

						<form class="modificacion mb-4" action="<?php echo $_SERVER['PHP_SELF'];?>">	

							<h3 class="text-center mb-4 mt-2">Verificacion de datos</h5>							
							<hr>

							<div class="row justify-content-around">
								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="serial" placeholder="Serial: <?php echo $serial;?>">
									</div>
								</div>

								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="rif" placeholder="Rif <?php echo $rif;?>">
									</div>
								</div>
							</div>

							<div class="row justify-content-around">
								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="modelo" placeholder="Modelo: <?php echo $modelo;?>">
									</div>
								</div>

								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="banco" placeholder="Banco <?php echo $banco;?>">
									</div>
								</div>
							</div>


							<div class="row justify-content-around">
								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="afiliacion" placeholder="Afiliacion: <?php echo $afiliacion?>">
									</div>
								</div>

								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="n_terminal" placeholder="N° Terminal: <?php echo $n_terminal?>">
									</div>
								</div>
							</div>





						<div class="row justify-content-around">
								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="fantasia" placeholder="N. Fantasia: <?php echo $fantasia;?>">
									</div>
								</div>

								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="razonSocial" placeholder="Razon Social: <?php echo $razonSocial;?>">
									</div>
								</div>
						</div>


						<div class="row justify-content-around">
								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="localizacion" placeholder="Localizacion: <?php echo $localizacion;?>">
									</div>
								</div>

								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="realizadopor" placeholder="Realizado Por: <?php echo $realizadopor;?>">
									</div>
								</div>
						</div>


						<div class="row justify-content-around">
								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="status" placeholder="Estatus: <?php echo $status;?>">
									</div>
								</div>

								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="serial_sustituto1" placeholder="Serial susituto: <?php echo $serial_sustituto1;?>">
									</div>
								</div>

						</div>

						<div class="row justify-content-around mb-4 mt-4">
							<div class="col-5">
								<a href="registrar_equipo.php" class="btn btn-danger btn-block">Modificar</a>
							</div>

							<div class="col-5">
								<a href="<?php echo $direccion;?>" class="btn btn-success btn-block">Confirmar</a>
							</div>

						</div>


			
						</form>


									
									
						
					</div>

			</main>

		</div>
	</div>
			<div class="row footer bg-inverse">
				<div class="col-12">
					<p class="text-center text-white my-3" > Henderver Alvarez || Banco Agricola de Venezuela || UPTAMCA 2020 </p>
				</div>		
			</div>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>