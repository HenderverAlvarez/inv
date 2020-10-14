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

				<h3 class="mb-2 text-center">Datos Del Cliente</h3>
				<hr>

				<div class="row mt-4 justify-content-between">

					<div class="col-6">

					</div>
				</div>
					
				<div class="row mt-4 justify-content-around">
						<div class="col-6">

							<a href="<?php echo $siguiente_pagina;?>" class="btn btn-primary btn-block">Siguiente</a>
							
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