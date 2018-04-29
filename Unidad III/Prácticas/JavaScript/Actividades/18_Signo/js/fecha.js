	/*Valida que el valor capturado sea una fecha menor a la actual
		Supone que el formato de captura fue dd/mm/aaaa
	*/
	function validaFechaMenor(campo){
		var bRet = false;
		var dHoy = new Date();
		var dCapt = null;
		var dSigno =null;
		if (campo.value == "")
			alert("Faltan datos");
		else{
			dCapt = validaFecha(campo.value);
			dSigno= signo(campo.value);
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
					}//fin validaci�n día-mes
				}//mes válido
			}//día válido
		}//formato válido
		else{
			alert("No tiene formato de fecha");
		}
		return dConvertida;
	}

	function signo(valor){
		var nAnio=0, nMes=0, nDia = 0;
		if(valor.match(/^\d{2}\/\d{2}\/\d{4}$/)){
			nDia = parseInt(valor.substring(0,2), 10);
			nMes = parseInt(valor.substring(3,5), 10);
			nAnio = parseInt(valor.substring(6,10), 10);

			//document.getElementsByTagName('label')[0].innerHTML='<img src="img/aries.png"/>';
			//document.getElementsById("insert_img")[0].src="img/aries.png";

     if((nDia>=21&& nMes==3) || (nDia>=1 && nDia<=19 && nMes==4))
		 //document.getElementsByTagName('label')[0].innerHTML ="Aries";
		 document.getElementsByTagName('img')[0].src ="img/aries.png";

		if((nDia>=20&& nMes==4) || (nDia>=1 && nDia<=20 && nMes==5))
    //document.getElementsByTagName('label')[0].innerHTML ="Tauro";
		document.getElementsByTagName('img')[0].src ="img/tauro.png";

			 if((nDia>=21&& nMes==5) || (nDia>=1 && nDia<=20 && nMes==6))
			// document.getElementsByTagName('label')[0].innerHTML ="Geminis";
			document.getElementsByTagName('img')[0].src ="img/geminis.png";

				if((nDia>=21 && nMes==6) || (nDia>=1 && nDia<=22 && nMes==7))
				//document.getElementsByTagName('label')[0].innerHTML ="Cancer";
				document.getElementsByTagName('img')[0].src ="img/cancer.png";

				 if((nDia>=23 && nMes==7) || (nDia>=1 && nDia<=23 && nMes==8))
				 //document.getElementsByTagName('label')[0].innerHTML ="Leo";
				 document.getElementsByTagName('img')[0].src ="img/leo.png";

				 if((nDia>=24 && nMes==8) || (nDia>=1 && nDia<=22 && nMes==9))
				 //document.getElementsByTagName('label')[0].innerHTML ="Virgo";
				 document.getElementsByTagName('img')[0].src ="img/virgo.png";

				 if((nDia>=23 && nMes==9) || (nDia>=1 && nDia<=22 && nMes==10))
				 //document.getElementsByTagName('label')[0].innerHTML ="Libra";
				 document.getElementsByTagName('img')[0].src ="img/libra.png";

				 if((nDia>=23 && nMes==10) || (nDia>=1 && nDia<=21 && nMes==11))
				 //document.getElementsByTagName('label')[0].innerHTML ="Escorpio";
				 document.getElementsByTagName('img')[0].src ="img/escorpio.png";

				 if((nDia>=22 && nMes==11) || (nDia>=1 && nDia<=21 && nMes==12))
				 //document.getElementsByTagName('label')[0].innerHTML ="Sagitario";
				 document.getElementsByTagName('img')[0].src ="img/sagitario.png";

				 if((nDia>=22 && nMes==12) || (nDia>=1 && nDia<=19 && nMes==1))
				 //document.getElementsByTagName('label')[0].innerHTML ="Capricornio";
				 document.getElementsByTagName('img')[0].src ="img/capricornio.png";

				 if((nDia>=20 && nMes==1) || (nDia>=1 && nDia<=19 && nMes==2))
				 //document.getElementsByTagName('label')[0].innerHTML ="Acuario";
				 document.getElementsByTagName('img')[0].src ="img/acuario.png";

				 if((nDia>=20 && nMes==2) || (nDia>=1 && nDia<=20 && nMes==3))
				 //document.getElementsByTagName('label')[0].innerHTML ="Piscis";
				 document.getElementsByTagName('img')[0].src ="img/piscis.png";

		}
	}
