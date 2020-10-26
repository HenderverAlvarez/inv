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

<!--este row contiene tanto el menu como el contenido-->				
<div class="row"> 

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
	<div class="col-sm-10 col-md-9">

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
				<div class="row mb-5 justify-content-around hidden-xs-down">
				
				<?php if ($_SESSION['idperfil']<3): ?>
				<div class="punto col-10 col-md-6">
					<a href="registrar_equipo.php" class="btn boton btn-block"><span class="icon-plus mr-1"></span>Registrar Equipo</a>
				</div>
				<?php endif; ?>
				
				<div class="punto col-10 col-md-6">
					<a href="consolidado.php" class="btn boton btn-block"><span class="icon-info mr-1"></span>Reporte de Situacion Actual</a>
				</div>
				
					
				</div>

				<div class="row mb-5 justify-content-around hidden-sm-up">
				
				<?php if ($_SESSION['idperfil']<3): ?>
				<div class="punto col-auto">
					<a href="registrar_equipo.php" class="btn boton btn-block"><span class="icon-plus mr-1"></span>Registrar Equipo</a>
				</div>
				<?php endif; ?>
				
				<div class="punto col-auto">
					<a href="consolidado.php" class="btn boton btn-block"><span class="icon-info mr-1"></span>Reporte de Situacion Actual</a>
				</div>
				
					
				</div>

			<!--Aqui van las cards para la vista general del inventario-->
				<main class="row main justify-content-end mb-4 mt-3">
				
				<div class="col-sm-12 col-md-12">

					
					<?php foreach ($puntos as $punto):?>
					
					<div class="row align-self-right unidad justify-content-around mb-4">
					 	
					 	<div class='col-sm-10 col-md-8 card mb-4'>
					
						<div class='card-header mt-2'>
						<p class='card-text text-center'>Serial: <?php $id=$punto['Idinventario']; $equipo=relacion_inventario('inventario','equipo',$id); echo $equipo['serial'];?></p>
						<p class='card-text text-center'><?php $id=$punto['Idinventario']; $cliente=relacion_inventario('inventario','cliente',$id); echo $cliente['Razonsocial'];?></p>
						</div>

						<div class='card-block'> 

							<div class='row mb-4'>
							<div class="col">
								<p class='card-text text-center'>Modelo: <?php $id=$punto['Idequipo']; $modelo=relacion_inventario('equipo','modelo',$id); echo $modelo['modelo'];?></p>
							</div>
							</div>

							<div class='row justify-content-between'>
							
							<div class='col-8'>
							<p class='card-text text-center'>Estatus: <?php $id=$punto['Idequipo']; $estatus=relacion_inventario('equipo','concepto',$id); echo $estatus['Descripcion'];?></p>	
							</div>

							<div class="col-4">
								<p class='card-text text-center'><?php $id=$punto['Idequipo']; $Localizacion=relacion_inventario('equipo','localizacion',$id); echo $Localizacion['concepto'];?></p>	
							</div>
						
							</div>


						</div>

						<div class='card-footer'>
							<a class='card-link btn btn-block boton' href="vista_general.php?id=<?php echo $punto['Idinventario']?>">Mas informacion</a>
						</div>

					</div>
				</div>

				<?php endforeach ?>
				
				<div class="row">
					
					<div class="col">
						<nav>
							<ul class="pagination d-flex justify-content-center">

								<?php if($pagina==1):?>
									<li class="page-item disabled"><a class="page-link disabled" href="">&laquo;</a></li>
								<?php else: ?>
									<li class="page-item"><a class="page-link" href="?pagina=<?php  echo $pagina-1;?>">&laquo;</a></li>
								<?php endif?>


								<?php for($i=1;$i<=$n_paginas;$i++){
									if ($i==$pagina) {
										echo "<li class='page-item'><a href='' class='page-link active'>".$i."</a></li>";
									}else{echo "<li class='page-item'><a href='?pagina=$i' class='page-link'>".$i."</a></li>";}
								}?>


								<?php if($pagina==$n_paginas):?>
									<li class="page-item disabled" ><a class="page-link" href="">&raquo;</a></li>
								<?php else: ?>
									<li class="page-item"><a class="page-link" href="?pagina=<?php  echo $pagina+1;?>">&raquo;</a></li>
								<?php endif?>
								
							
							</ul>
						</nav>
					</div>

				</div>			
					


					</div>

				</div>
				</main>

	</div>
</div>

	</div>


			<div class="row footer bg-inverse">
				<div class="col-12">
					<p class="text-center text-white my-3" > Henderver Alvarez || Banco Agricola de Venezuela || UPTAMCA 2020 </p>
				</div>		
			</div>


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>