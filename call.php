<?php
include 'db.php';
$registro=$_GET['id'];
$query="UPDATE queue SET status=true WHERE registro=$registro";
mysqli_query($conexao,$query);
header('location:index.php?pagina=chamar');
?>