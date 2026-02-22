<?php
include "conexion.php";

$sql = "SELECT * FROM empleados";
$stmt = $pdo->query($sql);
$empleados = $stmt->fetchAll();

?>


<table border="1">
<tr>
  <th>ID</th>
  <th>Nombre</th>
  <th>Correo</th>
  <th>Acciones</th>
</tr>

<?php foreach ($empleados as $e): ?>
<tr>
  <td><?= $e['id'] ?></td>
  <td><?= $e['nombre'] ?></td>
  <td><?= $e['correo'] ?></td>
  <td>
    <a href="editar.php?id=<?= $e['id'] ?>">Actualizar</a>
  </td>
</tr>
<?php endforeach; ?>

</table>
<br>
<br>
<a href="multimplicar.php">➕ Agregar nuevo registro</a>
<br><br>
