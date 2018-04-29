<?php 
function concatenar(&$msg)  
{ 
   	 $msg .= ' y algo m&aacutes.'; 
} 
$str = 'Esto es una cadena, '; 
concatenar($str); 
echo $str;    // Saca 'Esto es una cadena, y algo más.' 
?>
