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

	<div class="row mb-5 justify-content-around">
				
				<?php if ($_SESSION['idperfil']<3): ?>
				<div class="col-6">
					<a href="registrar_equipo.php" class="btn btn-primary btn-block">Registrar Equipo</a>
				</div>
				<?php endif; ?>
				
				<div class="col-6">
					<a href="consolidado.php" class="btn btn-primary btn-block">Reporte de Situacion Actual</a>
				</div>
	</div>

			<main class="row main justify-content-end mb-4 mt-3">
				
				<div class="col-sm-12 col-md-12">

					
					<?php foreach ($puntos as $punto):?>
					
					<div class="row align-self-right justify-content-around mb-4">
					 	<div class='col-sm-10 col-md-8 card mb-4'>
					
						<div class='card-header'>
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
							<a class='card-link btn btn-block btn-info' href="vista_general.php?id=<?php echo $punto['Idinventario']?>">Mas informacion</a>
						</div>

					</div>
				</div>

				<?php endforeach ?>
				
				<div class="row">
					
					<div class="col">
						<nav>
							<ul class="pagination d-flex justify-content-center">

								<?php if($pagina==1):?>
									<li class="page-item disabled" ><a class="page-link" href="">&laquo;</a></li>
								<?php else: ?>
									<li class="page-item"><a class="page-link" href="?pagina=<?php  echo $pagina-1;?>">&laquo;</a></li>
								<?php endif?>


								<?php for($i=1;$i<=$n_paginas;$i++){
									if ($i==$pagina) {
										echo "<li class='page-item active'><a href='' class='page-link'>".$i."</a></li>";
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


			<div class="row footer bg-inverse mt-5">
				<div class="col-12">
					<p class="text-center text-white my-3" > Henderver Alvarez || Banco Agricola de Venezuela || UPTAMCA 2020 </p>
				</div>		
			</div>


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>