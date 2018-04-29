<?php
/*
Archivo:  tabpacientes.php
Objetivo: consulta general sobre pacientes y acceso a operaciones detalladas
Autor:
*/
include_once("modelo\Usuario.php");
// include_once("modelo\PersonalHospitalario.php");
include_once("modelo\PacientesHospital.php");
session_start();
$sErr="";
$sNom="";
$arrPersHosp=null;
$oUsu = new Usuario();
$oPersHosp = new PacientesHospital();
	/*Verificar que exista sesión*/
	if (isset($_SESSION["usu"]) && !empty($_SESSION["usu"])){
		$oUsu = $_SESSION["usu"];
		$sNom = $oUsu->getPersHosp()->getNombre();
		try{
			$arrPersHosp = $oPersHosp->buscarTodos();
			//Buscar lista de pacientes
		}catch(Exception $e){
			//Enviar el error específico a la bitácora de php (dentro de php\logs\php_error_log
			error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
			$sErr = "Error en base de datos, comunicarse con el administrador";
		}
	}
	else
		$sErr = "Falta establecer el login";

	if ($sErr == ""){
		include_once("cabecera.html");
		include_once("menu.php");
		include_once("aside.html");
	}
	else{
		header("Location: error.php?sError=".$sErr);
		exit();
	}
?>
		<section>
			<h3>Pacientes</h3>
			<form name="formTablaGral" method="post" action="abcPaciente.php">
				<input type="hidden" name="txtClave">
				<input type="hidden" name="txtOpe">
				<!-- EN CONSTRUCCI&Oacute;N -->
				<table border="1">
					<tr>
						<td>Clave</td>
						<td>Nombre</td>
						<td>Apellido Paterno</td>
						<td>Apellido Materno</td>
						<td>Fecha de nacimiento</td>
						<td>Sexo</td>
						<td>Alergias</td>
						<td>Operaci&oacute;n</td>
					</tr>
					<?php
					if ($arrPersHosp!=null){
						foreach($arrPersHosp as $oPersHosp){
					 ?>
					 <tr>
 						<td class="llave"><?php echo $oPersHosp->getIdPersonal(); ?></td>
 						<td><?php echo $oPersHosp->getNombre(); ?></td>
						<td><?php echo $oPersHosp->getApePat(); ?></td>
						<td><?php echo $oPersHosp->getApeMat(); ?></td>
						<td><?php echo $oPersHosp->getFechaNacim(); ?></td>
						<td><?php echo $oPersHosp->getSexo(); ?></td>
						<td><?php echo $oPersHosp->getTipo(); ?></td>
 						<td>
 							<input type="submit" name="Submit" value="Modificar" onClick="txtClave.value=<?php echo $oPersHosp->getIdPersonal(); ?>; txtOpe.value='m'">
 							<input type="submit" name="Submit" value="Borrar" onClick="txtClave.value=<?php echo $oPersHosp->getIdPersonal(); ?>; txtOpe.value='b'">
 						</td>
 					</tr>
					<?php
							}//foreach
						}else{
					?>
					<tr>
						<td colspan="8">No hay datos</td>
					</tr>
					<?php
						}
					?>
				</table>
				<input type="submit" name="Submit" value="Crear Nuevo" onClick="txtClave.value='-1';txtOpe.value='a'">
			</form>
		</section>
<?php
include_once("pie.html");
?>
