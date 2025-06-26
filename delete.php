<?php
include 'db.php';
$codigo = $_GET['codigo'];
$conn->query("DELETE FROM clientes WHERE codigo=$codigo");
header("Location: index.php");
?>
