
<?php
$conexao = new mysqli("localhost", "root", "");
$conexao->set_charset("UTF8");
if ($conexao->connect_error) {
    die("Falha ao conectar: " . $conexao->connect_error);
}
if (!$conexao->select_db("agenda")) {
    die("O Banco de dados não existe");
}
$codigo = $_GET["codigo"];
$sql = "delect from pessoa where codigo=$codigo";
$status = $conexao ->query($sql);
if ($status ==0){
	echo"erro ao excluir" . $conexao->error
	. "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL =listar.php'>";

}
$conexao->close();
?>