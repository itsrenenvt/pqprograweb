<?php
/*
Archivo:  resABC.php
Objetivo: ejecuta la afectación al personal y retorna a la pantalla de consulta general
Autor:  BAOZ
*/
include_once("modelo\PacientesHospital.php");
session_start();

$sErr=""; $sOpe = ""; $sCve = "";
$oPacHosp = new PacientesHospital();

	/*Verificar que exista la sesión*/
	if (isset($_SESSION["usu"]) && !empty($_SESSION["usu"])){
		/*Verifica datos de captura mínimos*/
		if (isset($_POST["txtClave"]) && !empty($_POST["txtClave"]) &&
			isset($_POST["txtOpe"]) && !empty($_POST["txtOpe"])){
			$sOpe = $_POST["txtOpe"];
			$sCve = $_POST["txtClave"];
			$oPacHosp->setIdPersonal($sCve);

			if ($sOpe != "b"){
				$oPacHosp->setNombre($_POST["txtNombre"]);
				$oPacHosp->setApePat($_POST["txtApePat"]);
				$oPacHosp->setApeMat($_POST["txtApeMat"]);
				$oPacHosp->setFechaNacim(DateTime::createFromFormat('Y-m-d', $_POST["txtFecNacim"]));
				$oPacHosp->setSexo($_POST["rbSexo"]);
				$oPacHosp->setTipo($_POST["txtAlergia"]);
			}
			try{
				if ($sOpe == 'a')
					$nResultado = $oPacHosp->insertar();
				else if ($sOpe == 'b')
					$nResultado = $oPacHosp->borrar();
				else
					$nResultado = $oPacHosp->modificar();

				if ($nResultado != 1){
					$sError = "Error en bd";
				}
			}catch(Exception $e){
				//Enviar el error específico a la bitácora de php (dentro de php\logs\php_error_log
				error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
				$sErr = "Error en base de datos, comunicarse con el administrador";
			}
		}
		else{
			$sErr = "Faltan datos";
		}
	}
	else
		$sErr = "Falta establecer el login";

	if ($sErr == "")
		header("Location: tabpacientes.php");
	else
		header("Location: error.php?sError=".$sErr);
	exit();
?>
