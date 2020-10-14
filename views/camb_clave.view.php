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

			<div class="row header mt-3">
				
				<div class="col-md-11 col-sm-12 bg-info">
					
					<h1 class="bav">Banco Agricola De Venezuela</h1>

				</div>

				<div class="col-md-1 hidden-sm-down">
					<div class="logo">
						<img src="#" class="img-fluid">
					</div>
				</div>

			</div>



						<!--Fila Para contenido Principal-->

			<div class="row login justify-content-center mt-5 mb-5">


																	<!--Formulario de modificacion-->
				<div class="col-md-8 align-self-center mt-4">
							
							<h3 class="title mb-3">Recuperar Contraseña</h3>

					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" class="form">
					
							<div class='recuperacion'>
									
									<form method='POST' class='form'>
											

										<div class="form-group mb-3">
										<label for="usuario">Indique su usuario</label> <input class="form-control" type="text" name="usuario" id="usuario" placeholder="usuario">
										</div>

										<div class='form-group mb-3'>
										<label for='pass_n'>Escriba su nueva clave</label> <input class='form-control' type='password' name='pass_n' id='pass_n'>
										</div>

										<div class='form-group mb-3'>
										<label for='pass_n2'>Repita su nueva clave</label> <input class='form-control' type='password' name='pass_n2' id='pass_n2'>
										</div>

										<div class='form-group mb-4'>
										<button class='btn btn-primary btn-block' value='Continuar'>Continuar</button>

										</div>

									</form>

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