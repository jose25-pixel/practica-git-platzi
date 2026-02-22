<?php
/*

$pdo = new PDO("mysql:host=localhost;dbname=empresa","root","");

$conexio= new PDO("mysql:host=localhost;dbname=empresa","root", "");
$sql ="SELECT* FROM empleados";
$stmt=$pdo->query($sql);
$datos=$stmt->fetchAll();*/


$host = "localhost";
$db   = "empresa";
$user = "root";
$pass = "";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $e) {
  echo "Error de conexión";
}



?>




