<?php
include 'db.php';
$registro=$_GET['id'];
$query="DELETE FROM queue WHERE registro=$registro";
mysqli_query($conexao,$query);
header('location:index.php?pagina=remover');
?>