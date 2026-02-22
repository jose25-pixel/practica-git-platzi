<?php
include "conexion.php";

$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';

// Validar
if ($nombre == '' || $correo == '') {
  echo "Campos vacíos";
  exit;
}

// Insertar
$sql = "INSERT INTO empleados (nombre, correo) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nombre, $correo]);

echo "Registro guardado";
echo "<br><a href='listar.php'>Ver lista</a>";


//include "conexion.php"



?>