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


<div class="col-md-9">



								<!--Fila Para El header-->
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
			<div class="row back">
						<div class="col-3">
							<a class="btn text-white boton" href="inventario.php"><span class="mr-2">&laquo;</span>Regresar</a>
						</div>
			</div>
			<main class="row main  justify-content-center">
				
				<div class="col-sm-12 col-md-11">

				<h3 class="mb-3 text-center">Datos Del Equipo</h3>

				<form class="form modificacion mb-2 justify-content-around" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

				

				<div class="row mt-3 justify-content-around">
					
					<div class="col-5">
						<div class="form-goup">
							<label for="serial" class="form-label">Serial (Actual)</label>
							<input type="text" name="serial" class="form-control" placeholder="Ingrese el Serial del equipo">
						</div>		
					</div>


					<div class="col-5">
						<div class="form-goup">
							<label for="modelo">Modelo del equipo</label>
							<select class="form-control" name="modelo">
								<option value="PAX S90 (GPRS) AGRICOLA 840">PAX S90 (GPRS) AGRICOLA 840</option>
								<option value="PAX S90 (DIAL) AGRICOLA 840">PAX S90 (DIAL) AGRICOLA 840</option>
							</select>						
						</div>
					</div>

				</div>

				<div class="row mt-2 justify-content-around">
					
					<div class="col-5">
						<div class="form-goup">
							<label for="afiliado" class="form-label">Afiliado</label>
							<input type="text" name="afiliado" class="form-control" placeholder="Ingrese El numero de afiliado">
						</div>		
					</div>


					<div class="col-5">
						<div class="form-goup">
							<label for="banco">Banco</label>
							<select class="form-control" name="banco">
								<option value="BAV" class="">Banco Agricola de Venezuela</option>
								<option value="Credicard" class="">Credicard</option>
								<option value="Aliado" class="">Aliado</option>
							</select>						
						</div>
					</div>

				</div>

				<div class="row mt-2 justify-content-around">

					<div class="col-5">
						<div class="form-goup">
							<label for="localizacion">Localizacion</label>
							<select class="form-control" name="localizacion">
								<option value="Comercio" class="">Comercio</option>
								<option value="Boveda" class="">Boveda</option>
								<option value="Agencia" class="">Agencia</option>
								<option value="Reparacion" class="">Reparacion</option>
								<option value="RRHHA BAV" class="">RRHHA BAV</option>
								<option value="Robo/hurto" class="">Robo/hurto</option>
								<option value="Credicard" class="">Credicard</option>
								<option value="Credicard Draza" class="">Credicard Draza</option>
							</select>						
						</div>
					</div>


					<div class="col-5">
						<div class="form-group">
							<label for="terminal">Numero de Terminal</label>
							<input type="text" name="terminal" placeholder="Ingrese el numero de terminal" class="form-control">
						</div>
					</div>
				</div>

				<div class="row mt-2 justify-content-around">

					<div class="col-5">
						<div class="form-group">
							<label for="serial_sustituto1">Serial Sustituto 1 (Opcional) </label>
							<input type="text" name="serial_sustituto1" placeholder="serial anterior" class="form-control">
						</div>
					</div>


					<div class="col-5">
						<div class="form-group">
							<label for="serial_sustituto2">Serial Sustituto 2 (Opcional) </label>
							<input type="text" name="serial_sustituto2" placeholder="serial anterior 2" class="form-control">
						</div>
					</div>

				</div>

				<div class="row mt-2 justify-content-around">

					<div class="col-5">
						<div class="form-group">
							<label for="serial_sustituto3">Serial Sustituto 3 (Opcional) </label>
							<input type="text" name="serial_sustituto3" placeholder="serial anterior" class="form-control">
						</div>
					</div>

				</div>


				<div class="row mt-4">
					
					
				</div>


				<hr>

				<h3 class="text-center mt-2">Datos del Cliente</h3>
				<hr>

				<div class="row mt-2 justify-content-around">

					<div class="col-5">
						<div class="form-group">
								
							<label for="rif">Rif</label>
							<input type="text" name="rif" placeholder="Ingrese el Rif del cliente" class="form-control">

						</div>
					</div>


					<div class="col-5">
						<div class="form-group">
								
							<label for="razon">Razon social</label>
							<input type="text" name="razon" placeholder="Ingrese la Razon social del cliente" class="form-control">

						</div>						
					</div>

			
				</div>
				
				<div class="row mt-2 justify-content-around">
						
						<div class="col-5">
							
							<div class="form-group">
								<label for="fantasia">Nombre Fantasia</label>
								<input type="text" name="fantasia" class="form-control" placeholder="Ingrese Nombre de fantasia">
							</div>

						</div>
						
						<div class="col-5">
								<label for="status">Estatus</label>
								<select class="form-control" name="status">
									<option value="Activo" class="">Activo</option>
									<option value="Prestamo" class="">POS de prestamo operativo</option>
									<option value="Desafiliado" class="">Dañado / Desafiliado</option>
									<option value="Por Reparar" class="">Dañado Por Reparar</option>
									<option value="Hurto" class="">Desincorporado por hurto</option>
									<option value="POS corretivo" class="">POS Corretivo</option>
								</select>		
						</div>								
				</div>
			
				<div class="row justify-content-center">
						
						<div class="col-6">
							<button class="btn btn-block boton mt-4 mb-4">Validar</button>
						</div>
				</div>	


				<div class="row justify-content-center">
					<div class="col-6">
						<?php if ($_SERVER['REQUEST_METHOD']  == 'POST') {if (empty($errores)){echo "<a class='mt-3 mb-4 btn boton btn-block' href='$direccion'>Siguiente</a>";}}?>	
						</div>
				</div>	
					
				<?php 
				if ($_SERVER['REQUEST_METHOD']  == 'POST') {
					
					if ($errores) {echo $errores;}
					

				}
				
				 ?>							
				</form>



				</div>	

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