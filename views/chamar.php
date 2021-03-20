<center><h3>Chamar o cliente para o atendimento</h3></center>
<?php
$query="SELECT registro, nome from queue WHERE status=0";
$consulta=mysqli_query($conexao,$query);
?>
<a class="btn btn-success" href="?pagina=adicionar">Inserir cliente na fila</a>
<table class="table table-over table-striped" id="tabela">
    <thead>
    <tr>
        <th>Registro</th>
        <th>Nome do Cliente</th>
        <th>Editar</th>
        <th>Atender</th>
    </tr>
    </thead>
    <tbody>
<?php
    while ($linha = mysqli_fetch_array($consulta)){
        echo '<tr><td>'.$linha['registro'].'</td>';
        echo '<td>'.$linha['nome'].'</td>';
        echo '<td><a href="?pagina=editar&id='.$linha['registro'].'"><i class="fas fa-user-edit"></i></a>';
        echo '<td><a href="call.php?id='.$linha['registro'].'"><i class="fas fa-thumbs-up"></a></tr>';
    }
?>
</tbody>
</table>