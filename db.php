<?php 
$banco = 'meubanco';
$host = 'meusite.com.br';
$usuario = 'usuariodobanco';
$senha = 'minhasenha';
date_default_timezone_set('America/Recife');

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$host;charset=utf8", "$usuario", "$senha");

} catch (Exception $e) {
	echo "Erro ao conectar com o banco de dados! ".$e;
}
?>