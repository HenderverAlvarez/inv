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

			<main class="row main justify-content-around">
				
					<div class="col-12">
						
									
									
							<h3 class="text-center mb-4">Verificacion de datos</h5>							
							<hr>

						<form action="<?php echo $_SERVER['PHP_SELF'];?>">
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

						<div class="row justify-content-around">

								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="serial_sustituto2" placeholder="Serial susituto 2: <?php echo $serial_sustituto2;?>">
									</div>
								</div>

								<div class="col-5">	
									<div class="form-group">
										<input type="text" class="form-control" Readonly name="serial_sustituto3" placeholder="Serial susituto 3: <?php echo $serial_sustituto3;?>">
									</div>
								</div>

						</div>

						<div class="row mt-4">
							<div class="col-6">
								<a href="registrar_equipo.php" class="btn btn-danger btn-block">Modificar</a>
							</div>

							<div class="col-6">
								<a href="<?php echo $direccion;?>" class="btn btn-success btn-block">Confirmar</a>
							</div>

						</div>


			
						</form>


									
									
						
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