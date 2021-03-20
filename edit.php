<?php
# Conecta com a base de dados
include 'db.php';
$id=$_POST['id'];
$nomedocliente = $_POST['nome'];
$query="UPDATE queue SET nome='$nomedocliente' WHERE registro=$id";
mysqli_query($conexao, $query);
header('location:index.php?pagina=chamar');
?>