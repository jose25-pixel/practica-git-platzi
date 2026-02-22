<?php
include "conexion.php";

$id = $_POST['id'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';

if ($id == '' || $nombre == '' || $correo == '') {
  echo "Datos incompletos";
  exit;
}

$sql = "UPDATE empleados SET nombre = ?, correo = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nombre, $correo, $id]);

header("Location: listar.php");
