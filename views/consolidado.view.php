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
																	
<main class="row main justify-content-end mb-4 mt-3">
	<div class="col-sm-12 col-md-12">

		<h2 class="text-center mb-4">Situación Consolidada</h2>	
		<hr>	
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



			<div class="row footer bg-inverse mt-5">
				<div class="col-12">
					<p class="text-center text-white my-3" > Henderver Alvarez || Banco Agricola de Venezuela || UPTAMCA 2020 </p>
				</div>		
			</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>