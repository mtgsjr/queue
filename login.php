<?php
include 'db.php';
$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);
$query = "SELECT * FROM usuarios WHERE login_usuario='$usuario' AND senha_usuario='$senha'";
$acesso=mysqli_query($conexao,$query);
if (mysqli_num_rows($acesso) == 1) {
    session_start();
    $_SESSION['login']=true;
    $_SESSION['usuario']=$usuario;
    header('location:index.php?pagina=chamar');
} else {
    header('location:index.php?erro');
}
?>