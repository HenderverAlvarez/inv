<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login | BAV</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="img/favicon.jpg">

</head>

<body>


	<div class="container-fluid">
	
						<!--Fila Para El header-->

			<div class="row jumbotron jumbo">

					<div class="col-md-12">

						<h1 class="bav">Banco Agricola De Venezuela</h1>
						<hr>
						<p>Inventario de puntos de venta</p>

					</div>
			</div>	



						<!--Fila Para contenido Principal-->

			<div class="row login justify-content-end mt-3 mb-5">


														<!--Slider Para que se vea bomnito -->
				<div  class="col-md-8 col-sm-12" >
					
					<div data-ride="carousel" class="carousel slide slider" id="slider1">
							
							<ol class="carousel-indicators">
								<li data-target="#slider1" data-slid-to="0" class="active"></li>
								<li data-target="#slider1" data-slid-to="1"></li>
								<li data-target="#slider1" data-slid-to="2"></li>
								<li data-target="#slider1" data-slid-to="3"></li>
							</ol>



							<div class="carousel-inner">
								
									<div class="carousel-item active">
										<img class="img-fluid rounded imagen-carrusel"	 src="img/bav.jpg" alt="">
									</div>

									<div class="carousel-item">
										<img class="img-fluid rounded imagen-carrusel"	 src="img/bav2.jpg" alt="">
									</div>

									<div class="carousel-item">
										<img class="img-fluid rounded imagen-carrusel"	 src="img/bav3.jpg" alt="">
									</div>

									<div class="carousel-item">
										<img class="img-fluid rounded imagen-carrusel"	 src="img/bav4.jpg" alt="">
									</div>

							</div>

							<a href="#slider1" class="carousel-control-prev" data-slide="prev">
								<span class="carousel-control-prev-icon" area-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>

							<a href="#slider1" class="carousel-control-next" data-slide="next">
								<span class="carousel-control-next-icon" area-hidden="true"></span>
								<span class="sr-only">Anterior</span>
							</a>

					</div>

				</div>
				
																	<!--Formulario de Inicio de Sesion-->

				<div class="col-md-4 col-xs-10 align-self-center formulario_login mt-4">
							
							<h3 class="title mt-3 mb-4 text-center">Iniciar Sesion</h3>
							<hr>

					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="form">
						
						<div class="form-group mb-3">

							<div class="row">
							<span class=" col-2 icon-user icono"></span>
							<input class="col-9 form-control" type="text" name="usuario" id="usuario" placeholder="usuario">
							</div>

						</div>

						<div class="form-group mb-3">

								<div class="row">
								<span class="col-2 icon-lock icono"></span> 
								<input class="col-9 form-control" type="password" name="cont" id="usuario" placeholder="Contraseña">
								</div>
						</div>

							<hr>

							<div class="row justify-content-center">
									<div class="col-md-12 col-auto form-group mb-3">
										<button class="btn btn-block boton" value="continuar">
											Continuar
										</button>
									</div>
							</div>


						<?php 
							
							if ($errores) {
								echo "						
								<div class='errores mb-4'>
								
								$errores

								</div>";
							}

						 ?>
						
						<div class="row justify-content-center mb-4">
								<a href="recuperacion.php" class="text-center">Recuperar clave de acceso  &raquo;</a>
						</div>
					</form>

				</div>




			</div>	

			<div class="row footer bg-inverse mt-5 justify-content-center">
				<div class="col-12">
					<p class="text-center text-white my-3" > Henderver Alvarez || Banco Agricola de Venezuela || UPTAMCA 2020 </p>
				</div>		
			</div>


	</div>



	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>