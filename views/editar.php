<center><h3>EDITAR O NOME DO CLIENTE</h3></center>
<br></br>
<?php
include 'db.php';
$id=$_GET['id'];
$query="SELECT nome FROM queue WHERE registro=$id";
$consulta_nome=mysqli_query($conexao, $query);
while ($linha = mysqli_fetch_array($consulta_nome)){
    $nome=$linha['nome'];
}
?>
<form method="POST" action="edit.php">
    <label><h5>Entre com o nome do cliente</h5></label>
    <input type="hidden" name="id" placeholder="id" value="<?php echo $id;?>">
    <input class="form-control" type="text" name="nome" placeholder="Nome" value="<?php echo $nome;?>">
    <input type="submit" class="btn btn-success" value="Editar">
</form>
