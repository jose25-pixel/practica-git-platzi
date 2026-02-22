<?php
/*$edad=10;
if ($edad >= 18) {
  echo "Puede entrar";
} else {
  echo "No puede entrar";
}

$numero = 5;

for ($i = 1; $i <= 10; $i++) {
  echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
}



$num=6;
for($uno=1; $uno<=20; $uno++){

echo $num. "x".$uno. "=". ($num*$uno). "<br>";
}


$numero = 5;
$multiplos = range(1, 10);

foreach ($multiplos as $i) {
  echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
}*/


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CRUD Básico</title>
</head>
<body>

<h2>Registrar empleado</h2>

<form method="post" action="guardar.php">
  Nombre: <input type="text" name="nombre"><br><br>
  Correo: <input type="email" name="correo"><br><br>
  <button type="submit">Guardar</button>
</form>

</body>
</html>




</html>



