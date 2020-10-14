<?php 

function conectar_bd($host, $db, $usuario, $pass){

	try {
		$conexion=new PDO("mysql:host=$host; dbname=$db", $usuario, $pass);
		return $conexion;
	} catch (PDOException $e) {
		echo "Error: ". $e->getmessage();
		die();
	}
}


function relacion_inventario($busqueda,$busqueda2,$id){

	$conexion=conectar_bd("localhost", "inv_bav", "root", "");


if ($busqueda == 'inventario' ) {
	
	if ($busqueda2 =='equipo') {
		$consulta1=$conexion->prepare("SELECT * FROM inventario WHERE idinventario = $id");
		$consulta1->execute();
		$inventario=$consulta1->fetch();
		$id=$inventario['Idequipo'];

		$consulta2=$conexion->prepare("SELECT * FROM equipo WHERE Idequipo = $id");
		$consulta2->execute();
		$resultado=$consulta2->fetch();
		return $resultado;
	}

	if ($busqueda2  == 'cliente') {
		$consulta1=$conexion->prepare("SELECT * FROM inventario WHERE idinventario = $id");
		$consulta1->execute();
		$inventario=$consulta1->fetch();
		$id=$inventario['Idequipo'];

		$consulta2=$conexion->prepare("SELECT * FROM clientes WHERE idequipo = $id");
		$consulta2->execute();
		$resultado2=$consulta2->fetch();

		return $resultado2;
	}

	if ($busqueda2 =='usuario') {
		$consulta1=$conexion->prepare("SELECT * FROM inventario WHERE idinventario = $id");
		$consulta1->execute();
		$inventario=$consulta1->fetch();
		$idusuario=$inventario['IDusuario'];

		$consulta2=$conexion->prepare("SELECT * FROM usuarios WHERE ID = $idusuario");
		$consulta2->execute();
		$resultado=$consulta2->fetch();

		return $resultado;
	}
}

else if($busqueda == 'equipo'){

	if ($busqueda2 == 'modelo') {

		$consulta1=$conexion->prepare("SELECT * FROM equipo WHERE IDequipo = $id");
		$consulta1->execute();
		$equipo=$consulta1->fetch();
		$idm=$equipo['Idmodelo'];


		$consulta2=$conexion->prepare("SELECT * FROM modelo WHERE Idmodelo = $idm");
		$consulta2->execute();
		$resultado=$consulta2->fetch();

		return $resultado;	

	}

	if ($busqueda2 == 'localizacion') {
	
		$consulta1=$conexion->prepare("SELECT * FROM equipo WHERE IDequipo = $id");
		$consulta1->execute();
		$equipo=$consulta1->fetch();
		$idm=$equipo['IDlocalizacion'];


		$consulta2=$conexion->prepare("SELECT * FROM localizacion WHERE IDlocalizacion = $idm");
		$consulta2->execute();
		$resultado=$consulta2->fetch();

		return $resultado;	

	}

	if ($busqueda2 == 'banco') {

		$consulta1=$conexion->prepare("SELECT * FROM equipo WHERE IDequipo = $id");
		$consulta1->execute();
		$equipo=$consulta1->fetch();
		$idb=$equipo['Idbanco'];


		$consulta2=$conexion->prepare("SELECT * FROM banco WHERE IDbanco = $idb");
		$consulta2->execute();
		$resultado=$consulta2->fetch();

		return $resultado;	

	}

	if ($busqueda2 == 'concepto') {

		$consulta1=$conexion->prepare("SELECT * FROM equipo WHERE IDequipo = $id");
		$consulta1->execute();
		$equipo=$consulta1->fetch();
		$idm=$equipo['IDconcepto'];


		$consulta2=$conexion->prepare("SELECT * FROM concepto WHERE idconcepto = $idm");
		$consulta2->execute();
		$resultado=$consulta2->fetch();

		return $resultado;	
	}


}
else if($busqueda == 'cliente'){}
else if($busqueda == 'usuario'){}



}
 ?>