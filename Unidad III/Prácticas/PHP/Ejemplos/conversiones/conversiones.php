<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php

    include("index.php");

    $num_pregunta=isset($_POST['numero']) ? $_POST['numero'] : 0;

    $conversion =isset($_POST['op']) ? $_POST['op'] : "No hay sistema";

   /*Menú*/
   switch ($conversion) {
     case 'bin':
     binario($num_pregunta);
       break;

     case 'hexa':
     hexadecimal($num_pregunta);
       break;
   }


    function binario($numero)
    {
      //echo dec_to($numero, 2);
      //echo "<br>";
      echo "<h3>Número:  $numero <br><br> Binario: ".decbin($numero)."</h3>";
    }

    function hexadecimal($numero)
    {
      echo dec_to($numero, 16);
      //echo "<br>";
      echo "<h3>Número: $numero <br><br> Hexadecimal: ".dechex($numero)."</h3>";
    }

//Metodo elaborado
 function dec_to($num, $sistema) {
     $valores_hexa = array(10 => 'A', 11 => 'B', 12 => 'C', 13 => 'D', 14 => 'E', 15 => 'F');

     if ($sistema > 1 && $sistema < 17) {
         $num_retornar = array();
         while ($num > 0) {
             $residuo = $num % $sistema;
             $num = floor($num / $sistema);
             $num_retornar[] = $residuo > 9 ? $valores_hexa[$residuo] : $residuo;
         }
         return implode('', array_reverse($num_retornar));
     }
     return 'Verifica que el sistema al que deseas convertir sea válido';
}
    ?>

  </body>
</html>
