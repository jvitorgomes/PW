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
    $nome = $_GET["nome"];
    $endereco = $_GET["endereco"];
    $cidade = $_GET["cidade"];
    $fone = $_GET["fone"];
$sql ="update pessoa set nome = '$nome', endereco = '$endereco',".
"cidade = '$cidade' , fone = '$fone' where codigo = $codigo";
$status = $conexao -> query ($sql);
if ($status == 0){
    echo"Erro ao alterar:" . $conexao ->error;

} else if ($status ==1){
    echo "<script> alert('registro alterado com sucesso')</script>"
  .  "<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=listar.php'>";
}
$conexao->close();
?>
