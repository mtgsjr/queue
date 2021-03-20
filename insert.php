<?php
# Conecta com a base de dados
include 'db.php';
if ($_POST['nome']!=''){
    $nomedocliente = $_POST['nome'];
    $query="INSERT INTO queue (nome) VALUES ('$nomedocliente')";
    mysqli_query($conexao, $query);
    header('location:index.php?pagina=chamar');
} else {
    header('location:index.php?pagina=chamar');
}    
?>