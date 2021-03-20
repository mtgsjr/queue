<center><h3>Remover o cliente da fila de espera</h3></center>
<?php
include 'db.php';
$query="SELECT registro, nome, status from queue";
$consulta=mysqli_query($conexao,$query);
?>
<a class="btn btn-success" href="zerar.php">Zerar a fila</a>
<table class="table table-over table-striped" id="tabela">
    <thead>
    <tr>
        <th>Registro</th>
        <th>Nome do Cliente</th>
        <th>Deletar</th>
    </tr>
    </thead>
    <tbody>
<?php
    while ($linha = mysqli_fetch_array($consulta)){
        echo '<tr><td>'.$linha['registro'].'</td>';
        echo '<td>'.$linha['nome'].'</td>';
        if ($linha['status']==0){
            echo '<td><a href="delete.php?id='.$linha['registro'].'"><i class="fas fa-trash-alt"></i></a></tr>';
        } else {
            echo '<td>Atendido</tr>';
        }
    }
?>
</tbody>
</table>