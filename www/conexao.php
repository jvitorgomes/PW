<?php
	$conexao = new mysqli("localhost", "root", "");
	if ($conexao->connect_errno)	{
		die("Erro ao conectar com o banco de dados ("	.
		$conexao->connect_errno . "). " .
		$conexao->connect_error);	
		}
		if(!$conexao->select_db("agenda")) {
		die("O banco de dados não existe");
		}
		echo "Conectado com o banco de dados: " . $conexao->host_info;
		$conexao->close();
		
?>