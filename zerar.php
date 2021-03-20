<?php
include 'db.php';
$registro=$_GET['id'];
$query="TRUNCATE TABLE queue";
mysqli_query($conexao,$query);
header('location:index.php?pagina=remover');
?>