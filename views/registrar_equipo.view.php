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

				<form class="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

				<h3 class="mb-2 text-center">Datos Del Equipo</h3>
				<hr>

				<div class="row mt-4 justify-content-between">
					
					<div class="col-6">
						<div class="form-goup">
							<label for="serial" class="form-label">Serial</label>
							<input type="text" name="serial" class="form-control" placeholder="Ingrese el Serial del equipo">
						</div>		
					</div>


					<div class="col-6">
						<div class="form-goup">
							<label for="modelo">Modelo del equipo</label>
							<select class="form-control" name="modelo">
								<option value="PAX S90 (GPRS) AGRICOLA 840">PAX S90 (GPRS) AGRICOLA 840</option>
								<option value="PAX S90 (DIAL) AGRICOLA 840">PAX S90 (DIAL) AGRICOLA 840</option>
							</select>						
						</div>
					</div>

				</div>

				<div class="row mt-4 justify-content-between">
					
					<div class="col-6">
						<div class="form-goup">
							<label for="afiliado" class="form-label">Afiliado</label>
							<input type="text" name="afiliado" class="form-control" placeholder="Ingrese El numero de afiliado">
						</div>		
					</div>


					<div class="col-6">
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

				<div class="row mt-4 justify-content-between">

					<div class="col-6">
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


					<div class="col-6">
						<div class="form-group">
							<label for="terminal">Numero de Terminal</label>
							<input type="text" name="terminal" placeholder="Ingrese el numero de terminal" class="form-control">
						</div>
					</div>
				</div>

				<div class="row mt-4 justify-content-between">

					<div class="col-6">
						<div class="form-group">
							<label for="serial_sustituto1">Serial Sustituto 1 (Opcional) </label>
							<input type="text" name="serial_sustituto1" placeholder="serial anterior" class="form-control">
						</div>
					</div>


					<div class="col-6">
						<div class="form-group">
							<label for="serial_sustituto2">Serial Sustituto 2 (Opcional) </label>
							<input type="text" name="serial_sustituto2" placeholder="serial anterior 2" class="form-control">
						</div>
					</div>

				</div>

				<div class="row mt-4 justify-content-between">

					<div class="col-6">
						<div class="form-group">
							<label for="serial_sustituto3">Serial Sustituto 3 (Opcional) </label>
							<input type="text" name="serial_sustituto3" placeholder="serial anterior" class="form-control">
						</div>
					</div>

				</div>


				<div class="row mt-4">
					
					
				</div>


				<hr>

				<h3 class="text-center mt-4">Datos del Cliente</h3>
				<hr>

				<div class="row mt-4 justify-content-around">

					<div class="col-6">
						<div class="form-group">
								
							<label for="rif">Rif</label>
							<input type="text" name="rif" placeholder="Ingrese el Rif del cliente" class="form-control">

						</div>
					</div>


					<div class="col-6">
						<div class="form-group">
								
							<label for="razon">Razon social</label>
							<input type="text" name="razon" placeholder="Ingrese la Razon social del cliente" class="form-control">

						</div>						
					</div>

			
				</div>
				
				<div class="row mt-4">
						
						<div class="col-6">
							
							<div class="form-group">
								<label for="fantasia">Nombre Fantasia</label>
								<input type="text" name="fantasia" class="form-control" placeholder="Ingrese Nombre de fantasia">
							</div>

						</div>
						
						<div class="col-6">
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

				<button class="btn btn-primary btn-block mt-4">Validar</button>			
				</form>


				<?php 
				if ($_SERVER['REQUEST_METHOD']  == 'POST') {
					
					if ($errores) {echo $errores;}
					if (empty($errores)) {echo "<a class='mt-5 btn btn-primary btn-block' href='$direccion'>Siguiente</a>";}

				}
				
				 ?>	
				</div>	

				</div>
			
			</main>

		</div>
	</div>

			
			<div class="row footer">
				<div class="col-12">
					<div class="media">
						

					</div>
				</div>		
			</div>



	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>