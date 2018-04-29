
<html>
 
<head> 
   <title>Verifica  edad</title> 
</head> 
<body>

<?php
$edad=isset($_POST['edad']) ? $_POST['edad'] : 0; 
echo "<h1>Tu edad es: $edad</h1><br>";
if ($edad < 18) 
   echo "<h2>No puedes entrar</h2>"; 
else
   echo "<h1>Bienvenido</h1>"; 

?> 

</body>
</html>