	/*Valida que el valor capturado sea una fecha menor a la actual
		Supone que el formato de captura fue dd/mm/aaaa
	*/
	function validaFechaMenor(campo){
		var bRet = false;
		var dHoy = new Date();
		var dCapt = null;
		if (campo.value == "")
			alert("Faltan datos");
		else{
			dCapt = validaFecha(campo.value);
			if (dCapt != null && dCapt < dHoy)
				bRet = true;
			else
				alert("La fecha debe ser menor a la fecha actual");
		}
		return bRet;
	}

	/*Convierte una cadena a un objeto Date bajo formato dd/mm/aaaa,
		si no corresponde al formato regresa null*/
	function validaFecha(valor){
		var dConvertida = null;
		var sAnio = "";
		var sMes = "";
		var sDia = "";
		var nAnio=0, nMes=0, nDia = 0;

		if (valor.match(/^\d{2}\/\d{2}\/\d{4}$/)){
			nDia = parseInt(valor.substring(0,2), 10);
			nMes = parseInt(valor.substring(3,5), 10);
			nAnio = parseInt(valor.substring(6,10), 10);

			if (nDia <1 || nDia>31)
				alert("El día no es válido")
			else{
				if (nMes <1 || nMes>12)
					alert("El mes no es válido");
				else{
					if ((nMes==1 || nMes==3 || nMes==5 || nMes==7 ||
						 nMes==8 || nMes==10 || nMes==12) && nDia > 31)
						 alert("El mes tiene máximo 31 días");
					else if ((nMes==4 || nMes==6 || nMes==9 ||
								nMes==11) && nDia > 30)
						 alert("El mes tiene máximo 30 días");
					else if ((nMes==2) && ((nDia>29) || (nAnio%4!=0 && nDia>28)))
						 alert("Febrero tiene 28 días o 29 en bisiesto");
					else{
						dConvertida = new Date();
						dConvertida.setFullYear(nAnio, nMes-1, nDia);
					}//fin validación día-mes
				}//mes válido
			}//día válido
		}//formato válido
		else{
			alert("No tiene formato de fecha");
		}
		return dConvertida;
	}
