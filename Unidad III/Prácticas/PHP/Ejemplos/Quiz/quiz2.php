<html>
<head>
  <title>Quiz</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include("quiz.php");
$pregunta[] = "No has escogido una pregunta";
$pregunta[] = "¿Cuanto es 2 + 2?";
$pregunta[] = "¿Quién descubrio America?";
$pregunta[] = "¿Qué es H2O?";
$pregunta[] = "¿Qué resulta de combinar amarillo y azul?";
$pregunta[] = "¿De que color es el sol amarillo?";

$respuesta[] = "No hay respuesta";
$respuesta[] = "4";
$respuesta[] = "Cristobal Colon";
$respuesta[] = "Agua";
$respuesta[] = "Verde";
$respuesta[] = "Amarillo";

//Recupero el numero
$num_pregunta=isset($_POST['numero']) ? $_POST['numero'] : 0;

//si es menor o mayor a 5, no jale
if ($num_pregunta > 5 || $num_pregunta < 0) {
    echo "<body><h1>DEBES ELEGIR UN NÚMERO VALIDO</h1></body>";
}else{

  echo "<h1>Elegiste la pregunta: $num_pregunta </h1><br>

  <h4><span> $pregunta[$num_pregunta] </span></h4> <br><br>";

  echo "<form action='quiz2.php' method='post'>
  Ingresa tu respuesta: <input type='text' name='respuesta' size='15' class='input' placeholder='Respuesta'><br>
  <input type='submit' value='Aceptar'>
  </form>";

  $num_respuesta=isset($_POST['respuesta']) ? $_POST['respuesta'] : "No hay respuesta";

// $nada="<h3>Escribe tu respuesta</h3>";
// $correcto="<h3>Tu respuesta fue: CORRECTA</h3>";
// $incorrecto="<h3>Tu respuesta fue: INCORRECTA</h3>";

if ($num_respuesta==$respuesta[0]) {
      echo "<h3>Escribe tu respuesta</h3>";
      // print($nada);
    }else{
      if ($num_respuesta==$respuesta[1]){
        echo "<h3>Tu respuesta fue: CORRECTA</h3>";
        // print($correcto);
      }else{
        if ($num_respuesta==$respuesta[2]){
          echo "<h3>Tu respuesta fue: CORRECTA</h3>";
          // print($correcto);
        }else{
          if ($num_respuesta==$respuesta[3]){
            echo "<h3>Tu respuesta fue: CORRECTA</h3>";
            // print($correcto);
          }else{
            if ($num_respuesta==$respuesta[4]){
              echo "<h3>Tu respuesta fue: CORRECTA</h3>";
              // print($correcto);
            }else{
              if ($num_respuesta==$respuesta[5]){
                echo "<h3>Tu respuesta fue: CORRECTA</h3>";
                // print($correcto);
              }else{
                echo "<h3>Tu respuesta fue: INCORRECTA</h3>";
                // print($correcto);
            }
          }
        }
      }
    }
  }
}
?>
</body>
</html>
