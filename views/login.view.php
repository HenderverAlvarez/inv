<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login | BAV</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>

<body>


	<div class="container">
	
						<!--Fila Para El header-->

			<div class="row jumbotron bg-info">
					<div class="col-md-10">

						<h1 class="bav mb-4">Banco Agricola De Venezuela</h1>
						<hr>
						<p>Inventario de puntos de venta</p>

					</div>
			</div>	



						<!--Fila Para contenido Principal-->

			<div class="row login justify-content-end mt-5 mb-5">


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
										<img class="img-fluid rounded" max-height="800"	 src="img/bav.jpg" alt="">
									</div>

									<div class="carousel-item">
										<img class="img-fluid rounded" max-height="800"	 src="img/bav2.jpg" alt="">
									</div>

									<div class="carousel-item">
										<img class="img-fluid rounded" max-height="800"	 src="img/bav3.jpg" alt="">
									</div>

									<div class="carousel-item">
										<img class="img-fluid rounded" max-height="800"	 src="img/bav4.jpg" alt="">
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

				<div class="col-md-4 col-sm-12 align-self-center formulario_login mt-4">
							
							<h3 class="title mb-3">Inicio de Sesion</h3>

					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="form">
						
						<div class="form-group mb-3">
							<label for="usuario">Indique su usuario</label> <input class="form-control" type="text" name="usuario" id="usuario" placeholder="usuario">
						</div>

							<hr>

						<div class="form-group mb-3">
							<label for="cont">Escriba su Contraseña</label> <input class="form-control" type="password" name="cont" id="usuario" placeholder="Contraseña">
						</div>

							<hr>

						<div class="form-group mb-4">
							<button class="btn btn-primary btn-block" value="continuar">
								Continuar
							</button>
						</div>

						<?php 
							
							if ($errores) {
								echo "						
								<div class='errores mb-4'>
								
								$errores

								</div>";
							}

						 ?>
						 <div class="form-group">
						<a href="recuperacion.php" class="text-center btn btn-block btn-sm btn-primary">Recuperar clave de acceso</a>
						</div>
					</form>

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