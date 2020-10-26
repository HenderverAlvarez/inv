<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login | BAV</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
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
					<div class="row back">
						<div class="col-3">
							<a class="" href="index.php"><span class="mr-2">&laquo;</span>Regresar</a>
						</div>
					</div>

			<div class="row justify-content-center mt-2 mb-5">

																	<!--Formulario de recuperacion de contraseña-->
				<div class="col-md-6 align-self-center formulario_recuperacion mt-4">
							
						<h3 class="title text-center mb-3 mt-3">Recuperar Contraseña</h3>

					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="form">

							<hr>

						<div class="form-group mb-3">
							<label for="cont">Cedula de identidad</label> <input class="form-control" type="number" name="cedula" id="cedula" placeholder="Cedula">
						</div>

						<div class="form-group mb-4">
							<label for="cont">Fecha de nacimiento</label> <input class="form-control" type="date" name="nacimiento" id="nacimiento">
						</div>

							<hr class=>

						<div class="form-group mb-4">

							<button class="btn btn-block boton">
								Confirmar
							</button>
						</div>

						<?php 
							
							if ($errores) {
								echo "<div class='errores mb-4'>$errores</div>";

							}else{

							if($_SERVER['REQUEST_METHOD'] =='POST'){
						
							echo " <p class='text-center mb-4'>Informacion Validada Corectamente!</p>";
							echo " <a class='btn btn-block boton mb-3' href='camb_clave.php'>Cambiar Clave</a>";

								}

							} ?>


					</form>

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