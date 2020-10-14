<?php 



/*Clases, funciones y propiedades de los usuarios y distintos perfiles de autorizacion */

class Usuario{ /*Clase Absracta para los usuarios*/

public function _construct( $us, $password){ /*Metodo constructor*/
		$this->usuairo=$us;
		$this->contraseña=$password;
	}

	private $idperfil;	  /*Identificacion del perfil de seguridad*/
	private $IDusuario;   /*Identificacion primaria del usuario*/
	private $usuario;	  /*Nombre establecido por el usuario*/
	private $contraseña;  /*conraseña para ingresar al sistema correspondiente al usuario*/

public function validar(){

	$errores="";
	$usuario=filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING); //Validamos el usuario
	$password=hash("sha512", $_POST['cont']);									//validamos y encriptamos la contraseña


	$conexion=conectar_bd('localhost', 'inv_bav', 'root', '');


	$consulta=$conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario and pass = :password");
	$consulta->execute(array(":usuario" => $usuario, ":password" => $password));

	$resultado=$consulta->fetch();
	
		if ($resultado != false) {

			$idperfil=$resultado['IDperfil'];
			$this->$IDusuario=$resultado['ID'];

			$_SESSION['usuario'] = $usuario;
			$_SESSION['idperfil'] = $idperfil;
			$_SESSION['ID'] = $resultado['ID'];

			header ("Location:index.php");
		}

		else {
			$errores.="<li>Verifica tus datos de inicio de sesion</li>";
			return $errores;
		}
} /*Funcion para validar el inicio de sesion*/

public function modificar_contraseña(){
	$erroes="";
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if($_SESSION['usuario']){$usuario = $_SESSION['usuario'];}
		else{$usuario = $_POST['usuario'];}
		
		
		$pass_nueva=$_POST['pass_n'];	
		$pass_nueva2=$_POST['pass_n2'];
		
		$pass_nueva=hash("SHA512", $pass_nueva);
		$pass_nueva2=hash("SHA512", $pass_nueva2);



		if ($pass_nueva == $pass_nueva2) {

				
			$conexion = conectar_bd('localhost', 'inv_bav', 'root', '');		
			
			$consulta3=$conexion->prepare("UPDATE usuarios SET pass = :pass_nueva WHERE usuario = :usuario");
			$consulta3->execute(array(':pass_nueva' =>$pass_nueva, ':usuario' => $usuario ));

		if ($_SESSION['usuario']) {header("Location: gestion_usuarios.php");}else {header("Location: index.php");}
			

		}else{
			$erroes.="las contraseñas no coinciden <br>"; 
		}
	}

} /*funcion para modificar la contraseña del usuario*/

}

/*----------------------------------------------------------------*/

class Administrador extends Usuario{ /* Clase represenativa de los administradores */ 


	public function registrar_Usuarios($usuario, $password, $idperfil, $cedula, $nacimiento){

	$conexion=conectar_bd('localhost', 'inv_bav', 'root', '');
	$consulta1=$conexion->prepare("INSERT INTO usuarios (ID,IDperfil,usuario,pass,cedula,nacimiento) VALUES (null, :idperfil , :usuario, :password, :cedula, :nacimiento)");
	$consulta1->execute(array(":idperfil" => $idperfil, ":usuario" => $usuario, ":password" => $password, ":cedula" => $cedula, ":nacimiento" => $nacimiento));

	} /*Funcion para registrar usuarios nuevos de menor rango*/

	public function eliminarUsuario($id){
	
	$conexion=conectar_bd('localhost', 'inv_bav', 'root', '');

	$consulta1=$conexion->prepare("DELETE FROM usuarios WHERE ID = :id");
	$consulta1->execute(array(":id" => $id));

	}	/*funcion para eliminar un usuario del sistema*/
}

/*----------------------------------------------------------------*/



/*Clases para los equipos y el inventario*/

class Equipo{

	public $serial;
	private $rif;
	private $modelo;
	private $banco;
	private $afiliación;
	private $n_terminal;
	private $fantasia;
	private $razonSocial;
	private $localizacion;
	private $status;
	private $serialSustituto;
	private $serialSustituto2;
	private $serialSustituto3;
	private $realizadoPor;

	public function _construct($ser, $rif_p, $model, $bank, $afil, $n_ter, $fant, $razsocial, $local, $stat,$realizadop, $sustituto1, $sustituto2, $sustituto3){

		$this->serial=$ser;
		$this->rif=$rif_p;
		$this->modelo=$model;
		$this->banco=$bank;
		$this->afiliación=$afil;
		$this->n_terminal=$n_terminal;
		$this->fantasia=$fant;
		$this->razonSocial=$razsocial;
		$this->localizacion=$local;
		$this->status=$stat;
		$this->serialSustituto=$sustituto1;
		$this->serialSustituto2=$sustituto2;
		$this->serialSustituto3=$sustituto3;
		$this->realizadoPor=$realizadop;

	}

public function registrar_unidad($serialp, $rifp, $modelop, $bancop, $afiliacion, $n_terminal, $fantasiap, $razonSocialp, $localizacionp, $status, $serialSustituto, $serialSustituto2, $serialSustituto3, $realizadoPor){
	

	/*verificamos again que no haya un punto con este serial registrado*/
	$conexion1=conectar_bd('localhost', 'inv_bav', 'root', '');
	$consulta12=$conexion1->prepare("SELECT * FROM equipo WHERE serial = :serialb");
	$consulta12->execute(array(":serialb"=>$serialp));
	$coincidencias=$consulta12->fetch();


if (empty($coincidencias)) {

	/*Conectamos a la base de datos*/	
	$conexion=conectar_bd('localhost', 'inv_bav', 'root', '');


	/*Se escribe una consulta para guardar en la tabla de equipos*/
	$consulta1=$conexion->prepare("INSERT INTO equipo (IDequipo,serial,idmodelo,IDlocalizacion,idbanco, IDconcepto) VALUES (null, :seria, :idmodel, :idlocal, :idbank, :concepto)");
	$consulta1->execute(array(":seria"=>$serialp, ":idmodel"=>$modelop, ":idlocal"=>$localizacionp, ":idbank"=>$bancop, ":concepto"=>$status));

	$consulta3=$conexion->prepare("SELECT * FROM equipo WHERE serial = :serialp");
	$consulta3->execute(array(":serialp"=>$serialp));
	$resultado=$consulta3->fetch();

	if (!empty($resultado)) {
	
	$ideq=$resultado['IDequipo'];

	/*Se escribe una consulta para guardar en la tabla de clientes*/
	$consulta2=$conexion->prepare("INSERT INTO clientes (IDcliente,Rif,RazonSocial,Nfantasia,idequipo) VALUES (null, :rif, :rsocial, :nfantasia,:idequipo)");


	$consulta2->execute(array(":rif"=>$rifp, ":rsocial"=>$razonSocialp, ":nfantasia"=>$fantasiap, ":idequipo"=>$ideq));		

	}else{echo "no hubo coincidencias";}

}

}


public function modificar_Unidad($serialp, $rifp, $modelop, $bancop, $afiliacion, $n_terminal, $fantasiap, $razonSocialp, $localizacionp, $status, $serialSustituto, $serialSustituto2, $serialSustituto3, $realizadoPor){

/*conectamos a la base de datos*/
$conexion=conectar_bd("localhost", "inv_bav", "root", "");

//actualizamos la tabla de equipos
$consulta=$conexion->prepare("UPDATE equipo SET Idmodelo= :modelop, IDlocalizacion = :localizacionp, Idbanco = :bancop, IDconcepto = :status, Serialsustituto1 = :serialSustituto, Serialsustituto2 = :serialSustituto2, Serialsustituto3 = :serialSustituto3  WHERE serial = :serialp");

$consulta->execute(array(
':modelop' => $modelop, 
':localizacionp'=> $localizacionp, 
':bancop' => $bancop, 
':status'=> $status, 
':serialSustituto'=> $serialSustituto, 
':serialSustituto2' => $serialSustituto2, 
':serialSustituto3' => $serialSustituto3, 
':serialp'=>$serialp));

//actualizamos la tabla de clientes

	$consulta3=$conexion->prepare("SELECT * FROM equipo WHERE serial = :serialp");
	$consulta3->execute(array(":serialp"=>$serialp));
	$resultado=$consulta3->fetch();
	$equipo=$resultado['IDequipo'];

$consulta2=$conexion->prepare("UPDATE clientes SET Rif = :rifp ,RazonSOcial = :razonSocialp, Nfantasia = :fantasiap WHERE idequipo = :idequipo");
$consulta2->execute(array(
	":rifp" => $rifp, 
	":razonSocialp"=> $razonSocialp, 
	":fantasiap" =>$fantasiap, 
	":idequipo"=> $equipo));



}
}

/*----------------------------------------------------*/

class Inventario{

public $serialpunto;
public $fechaMov;
public $IdusuarioMov;
public $terminal;
public $afiliado;
public $mov;

 public function _construct($serial,$fecha,$idusuario,$terminal,$afiliado,$mov){

$this->serialpunto=$serial;
$this->fechaMov=$fecha;
$this->idusuario=$idusuario;
$this->terminal=$temrinal;
$this->afiliado=$afiliado;

}

public function guardar_mov($serialpunto,$fechaMov,$IdusuarioMov,$terminal,$afiliado,$mov){

	if ($mov == 'registro') {

	if (!empty($serialpunto) && !empty($fechaMov) && !empty($IdusuarioMov) && !empty($terminal) && !empty($afiliado) && !empty($mov)){

		//conectamos a la base de datos
		$conexion2=conectar_bd("localhost", "inv_bav", "root", "");

		//buscamos el id del serial introducido
		$consulta1=$conexion2->prepare("SELECT * FROM equipo WHERE serial = :seril");
		$consulta1->execute(array(":seril"=>$serialpunto));
		$resultado=$consulta1->fetch();
		$idpunto=$resultado['IDequipo'];
		

		//registramos el movimiento en la base de datos
		$consulta12=$conexion2->prepare("INSERT INTO inventario (Idinventario, Nroafiliacion,Nroterminal,Idequipo,IDusuario,fecha,movimiento) VALUES (null, :af,:term,:idequipo,:idusuario,:fecha,:mov)");
		$consulta12->execute(array(":af"=>$afiliado, ":term"=>$terminal, ":idequipo"=>$idpunto, ":idusuario"=>$IdusuarioMov, ":fecha"=>$fechaMov, ":mov"=>$mov));
	}
	}		

	if ($mov == 'modificacion') {

		if (!empty($serialpunto) && !empty($fechaMov) && !empty($IdusuarioMov) && !empty($terminal) && !empty($afiliado) && !empty($mov)){

		//conectamos a la base de datos
		$conexion2=conectar_bd("localhost", "inv_bav", "root", "");

		//
		$consulta=$conexion2->prepare("SELECT * FROM equipo WHERE serial = :serial");
		$consulta->execute(array(":serial" => $serialpunto));
		$equipo=$consulta->fetch();


		/*Revisar aca*/
		$idequipo=$equipo["IDequipo"];

	

		$consulta1=$conexion2->prepare("SELECT * FROM inventario WHERE Idequipo = $idequipo");
		$consulta1->execute();
		$inv=$consulta1->fetch();

		/*Revisar aca*/
		$idinv=$inv['Idinventario'];
		

		//registramos el movimiento en la base de datos
		$consulta12=$conexion2->prepare("UPDATE inventario SET Nroafiliacion = :afiliado, Nroterminal = :terminal, Idequipo = :idequipo, IDusuario = :IdusuarioMov, fecha = :fechaMov , movimiento = :mov WHERE Idinventario = :idinv");

		$consulta12->execute(array(
		':afiliado'=>$afiliado, 
		':terminal'=>$terminal, 
		':idequipo'=>$idequipo, 
		':IdusuarioMov'=>$IdusuarioMov, 
		':fechaMov'=>$fechaMov, 
		':mov'=>$mov, 
		':idinv'=>$idinv));
	}
		
	}	
	}


}
?>