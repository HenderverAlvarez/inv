<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login | BAV</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
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

			<div class="row login justify-content-center mt-5 mb-5">


																	<!--Formulario de modificacion-->
				<div class="col-md-6 align-self-center formulario_recuperacion mt-4">
							
							<h3 class="title mt-3 mb-3">Recuperar Contraseña</h3>

					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="form">
					
							<div class='recuperacion'>
									
									<form method='POST' class='form'>
											

										<div class="form-group mb-1">
										<label for="usuario"></label> <input class="form-control" type="text" name="usuario" id="usuario" placeholder=" Indique su Usuario">
										</div>

										<div class="row mb-3">
											
											<div class="col-6">
													<div class='form-group mb-3'>
														<label for='pass_n'></label> <input class='form-control' type='password' name='pass_n' id='pass_n' placeholder="Contraseña Nueva">
													</div>											
											</div>

											<div class="col-6">
												<div class='form-group mb-3'>
													<label for='pass_n2'></label> <input class='form-control' type='password' name='pass_n2' id='pass_n2' placeholder="Confirmar Contraseña">
												</div>
												
											</div>

										</div>
									

										

										<div class='form-group mb-4'>
										<button class='btn btn-block boton' value='Continuar'>Continuar</button>

										</div>

									</form>

								  </div>
					</form>

				</div>




			</div>

			<div class="row footer bg-inverse mt-5">
				<div class="col-12">
					<p class="text-center text-white my-3" > Henderver Alvarez || Banco Agricola de Venezuela || UPTAMCA 2020 </p>
				</div>		
			</div>


	</div>



	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>