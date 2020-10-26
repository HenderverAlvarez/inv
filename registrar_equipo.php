<?php session_start();
include 'clases.php';
include 'funciones.php';
$errores="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 $serial=$_POST['serial'];
 $rif=$_POST['rif'];
 $modelo=$_POST['modelo'];
 $banco=$_POST['banco'];
 $afiliacion=$_POST['afiliado'];
 $n_terminal=$_POST['terminal'];
 $fantasia=$_POST['fantasia'];
 $razonSocial=$_POST['razon'];
 $localizacion=$_POST['localizacion'];
 $status=$_POST['status'];
 if (isset($_POST['serial_sustituto1'])) { $serial_sustituto1=$_POST['serial_sustituto1'];}else{$serial_sustituto1=0;} 
 if (isset($_POST['serial_sustituto2'])) { $serial_sustituto2=$_POST['serial_sustituto2'];}else{$serial_sustituto2=0;} 
 if (isset($_POST['serial_sustituto3'])) { $serial_sustituto3=$_POST['serial_sustituto3'];}else{$serial_sustituto3=0;} 

 $realizadopor=$_SESSION['ID'];

/*si ningun campo obligatorio esta vacio*/
if (!empty($serial) && !empty($rif) && !empty($modelo) && !empty($banco) && !empty($afiliacion) &&  !empty($n_terminal) && !empty($fantasia) && !empty($razonSocial) && !empty($localizacion) && !empty($status) && !empty($realizadopor)) {

	$serial=filter_var($serial, FILTER_SANITIZE_STRING);		
	if (strlen($serial) > 20) {
		$errores.="<li class='text-center'>Ingresa un serial Valido (Maximo 20 caracteres)</li>";
		}

/*validacion del rif*/

	$rif=filter_var($rif, FILTER_SANITIZE_STRING);

	if (strlen($rif) > 12){$errores.="<li class='text-center'>Ingresa un numero de Rif Valido (Maximo 12 caracteres)</li>";}


/*Validacion del numero de afiliado*/
	$afiliacion=filter_var($afiliacion, FILTER_SANITIZE_STRING);
	if (strlen($afiliacion) > 4 || strlen($afiliacion) == 0){$errores.="<li class='text-center'>Ingresa un numero de afiliado Valido (Maximo 4 caracteres)</li>";}	

/*Validacion del numero de terminal*/

	$n_terminal=filter_var($n_terminal, FILTER_SANITIZE_STRING);
	if (strlen($n_terminal) > 4){$errores.="<li class='text-center'>Ingresa un numero de terminal Valido (Maximo 3 caracteres)</li>";}	

/*Validacion del numero de fantasia*/
$fantasia=filter_var($fantasia,FILTER_SANITIZE_STRING);
		if (strlen($fantasia) > 50){
			$errores.="<li class='text-center'>Nombre Fantasia invalido (Maximo 50 caracteres)</li>";	
			}

/*validacion de razon social*/
	$razonSocial=filter_var($razonSocial,FILTER_SANITIZE_STRING);
		if (strlen($razonSocial) > 50){
			$errores.="<li class='text-center'>Razon social invalida (Maximo 50 caracteres)</li>";	
			}

/*Validacion de localizacion*/

	$localizacion=filter_var($localizacion, FILTER_SANITIZE_STRING);

/*buscamos que el numero de serial no este registrado en el sistema*/

	$conexion1=conectar_bd('localhost', 'inv_bav', 'root', '');
	$consulta1=$conexion1->prepare("SELECT * FROM equipo WHERE serial = :serialb");
	$consulta1->execute(array(":serialb"=>$serial));
	$coincidencias=$consulta1->fetch();


if (!empty($coincidencias)) {$errores.="<li class='text-center m-4'>Ya existe un Equipo registrado con estos datos, si deseas modificarlo busca el serial en el panel de inventario <a href='inventario.php'>Modificar...</a></li> ";}


}else{$errores.="<li class='text-center'>Ingresa toda la informacion solicitada</li>";}
	
$direccion="confirmacion_equipo.php?serial=".$serial."&rif=".$rif."&modelo=".$modelo."&banco=".$banco."&afiliado=".$afiliacion."&terminal=".$n_terminal."&fantasia=".$fantasia."&razon=".$razonSocial."&localizacion=".$localizacion."&status=".$status."&realizadopor=".$realizadopor;


}



require 'views/registrar_equipo.view.php';
 ?>