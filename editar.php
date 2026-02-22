<?php
include "conexion.php";

$id = $_GET['id'] ?? '';

$sql = "SELECT * FROM empleados WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$empleado = $stmt->fetch();

if (!$empleado) {
  echo "Registro no encontrado";
  exit;
}

?>

<h2>Actualizar empleado</h2>

<form method="post" action="actualizar.php">
  <input type="hidden" name="id" value="<?= $empleado['id'] ?>">

  Nombre:
  <input type="text" name="nombre" value="<?= $empleado['nombre'] ?>"><br><br>

  Correo:
  <input type="email" name="correo" value="<?= $empleado['correo'] ?>"><br><br>

  <button type="submit">Actualizar</button>

</form>



