<?php
$conexao = mysqli_connect("localhost","root", "");
if (!$conexao) {
	die("Erro ao conectar com o banco de dados" .
		mysqli_connect_errno() . "<br>" .
		mysqli_error());

	# code...
}
if (!mysqli_select_db($conexao, "agenda")) {
	die("o banco de dados nao existe");

	# code...
}
echo "conectando com o banco de dados.". mysqli_info($conexao);
mysqli_close($conexao);
?>