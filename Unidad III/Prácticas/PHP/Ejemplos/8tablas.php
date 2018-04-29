<?php
$ciudad[] = "Par�s";
$ciudad[] = "Roma";
$ciudad[] = "Sevilla";
$ciudad[] = "Londres";
print ("<h3>Juan vive en " . $ciudad[0] . "<BR><h3>");
print ("<h3>Rosa vive en " . $ciudad[2] . "<BR></h3>");
?>

<br><hr>
<p>
<?php
$ciudad = array("Par�s", "Roma", "Sevilla", "Londres");
//se cuenta el n�mero de elementos de la tabla
$numelentos = count($ciudad);
//mostrar todos los elementos de la tabla
for ($i=0; $i < $numelentos; $i++)
{
	print ("La ciudad $i es $ciudad[$i] <BR>\n");
}
?>
</p>
<br><hr>

<?php
//Si no se especifica, el primer �ndice es el cero, pero se puede utilizar el operador => 
//para especificar el indice inicial.
$ciudad = array(1=>"Par�s", "Roma", "Sevilla", "Londres");
//se cuenta el n�mero de elementos de la tabla
$numelentos = count($ciudad);
//mostrar todos los elementos de la tabla
for ($i=1; $i <= $numelentos; $i++)
{
print ("La ciudad $i es $ciudad[$i] <BR>\n");
}
?>
<br><hr>

<?php
$semana = array("lunes", "martes", "mi�rcoles", "jueves", "viernes", "s�bado", "domingo");
echo "<h3>El total de d�as de la semana es: ".count($semana)."</h3><br>"; //7
//se coloca el �ndice en el primer elemento del array
reset($semana);
echo current($semana),"<br>"; //lunes
next($semana);
echo pos($semana),"<br>"; //martes
end($semana);
echo pos($semana),"<br>"; //domingo
prev($semana);
echo current($semana); //s�bado
?>

<br><hr>

<?php
$visitas = array("lunes"=>200, "martes"=>186, "mi�rcoles"=>190, "jueves"=>175, "viernes"=>350);
reset($visitas);
while (list($clave, $valor) = each($visitas))
{
	echo "el d�a $clave ha tenido $valor visitas<BR>";
}
?>


<br><hr>
<?php
$calendario[] = array (1, "enero", 31);
$calendario[] = array (2, "febrero", 28);
$calendario[] = array (3, "marzo", 31);
$calendario[] = array (4, "abril", 30);
$calendario[] = array (5, "mayo", 31);
while (list($clave, $valor ) = each($calendario))
{
	$cadena = $valor[1];
	$cadena .= " es el mes n�mero " . $valor[0];
	$cadena .= "y tiene " . $valor[2] . " d�as<BR>";
	echo $cadena;
}
?>


<br/><hr/>
<?php
$entrada = array ("Miguel", "Pepe", "Juan", "Julio", "Pablo"); 

//modifica el tama�o 
$salida = array_slice ($entrada, 0, 3); 
//muestro el array 
foreach ($salida as $actual) 
    echo $actual . "<br>"; 

echo "<p>"; 

//modifica otra vez 
$salida = array_slice ($salida, 1); 
//muestro el array 
foreach ($salida as $actual) 
    echo $actual . "<br>"; 
?> 


<?php
$entrada = array ("Miguel", "Pepe", "Juan", "Julio", "Pablo"); 
 //quito la primera casilla 
$salida = array_shift ($entrada); 
//muestro el array 
echo "La funci�n devuelve: " . $salida . "<br>"; 
foreach ($entrada as $actual) 
echo $actual . "<br>"; 
echo "<p>"; 
//quito la primera casilla, que ahora ser�a la segunda del array original 
$salida = array_shift ($entrada); 
echo "La funci�n devuelve: " . $salida . "<br>"; 
//muestro el array 
foreach ($entrada as $actual)  
echo $actual . "<br>"; 
?> 


<?php
$estadios_futbol = array("Barcelona"=> "Nou Camp","Real Madrid" => "Santiago Bernabeu","Valencia" => "Mestalla","Real Sociedad" => "Anoeta"); 

//mostramos los estadios 
foreach ($estadios_futbol as $indice=>$actual) 
    echo $indice . " -- " . $actual . "<br>"; 
echo "<p>"; 
//eliminamos el estadio asociado al real madrid 
unset ($estadios_futbol["Real Madrid"]); 
//mostramos los estadios otra vez 
foreach ($estadios_futbol as $indice=>$actual) 
echo $indice . " -- " . $actual . "<br>"; 
?>  


<?php
$tabla = array ("Lagartija", "Ara�a", "Perro", "Gato", "Rat�n"); 
//aumentamos el tama�o del array 
array_push($tabla, "Gorri�n", "Paloma", "Oso"); 
foreach ($tabla as $actual) 
    echo $actual . "<br>"; 
?>  


<?php
$tabla = array ("Lagartija", "Ara�a", "Perro", "Gato", "Rat�n"); 
$tabla2 = array ("12","34","45","52","12"); 
$tabla3 = array ("Sauce","Pino","Naranjo","Chopo","Perro","34"); 
//aumentamos el tama�o del array 
$resultado = array_merge($tabla, $tabla2, $tabla3); 
foreach ($resultado as $actual) 
    echo $actual . "<br>"; 
?>  




