<?php
$codigo = $_GET["codigo"];

$conexao = new mysqli ("localhost", "root","");
$conexao ->set_charset("UTF8");

if (!$conexao -> select_db("agenda")) {
	die("O banco de dados não existe");
}
$sql = "SELECT * FROM pessoa where codigo = $codigo";
$resultado = $conexao ->query($sql);
if ($resultado) {
	$linha = $resultado -> fetch_array();
	$nome = $_GET["nome"];
	$endereco = $_GET["endereco"];
	$cidade = $_GET["cidade"];
	$fone = $_GET["fone"];
}
?>
<form method ="GET" action="alterar.php">
<input type="hidden" name="codigo" value="<?$codigo?>>
Nome:<input type="text" name="nome" value="<?$nome?>">
endereco:<input type="text"name="endereco"value="<?$endereco?>">
cidade:<input type="text" name="cidade" value="<?$cidade?>">
telefone:<input type="text"name="telefone"value="<?$fone?>">
<input type="submit" value="Alterar">
</form>