<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Conversiones</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

    <form action="conversiones.php" method="post" source="this" class="caja">

      <br><br><br><br>
    Escribe un número: <input type="text" class="input"name="numero" value="" placeholder="Inserte número">

    <br><br><br><br>

    <h4>Eliga el sistema a convertir</h4>
    <select class="select" name="op" id="op">
      <option value="bin">Binario</option>
      <option value="hexa">Hexadecimal</option>
    </select>

    <br><br>
    <input type="submit" value="Convertir"><br><br>
  </form>
  </body>
</html>
