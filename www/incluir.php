
<?php
$conexao = new mysqli("localhost", "root", "");
$conexao->set_charset("UTF8");
if ($conexao->connect_error) {
    die("Falha ao conectar: " . $conexao->connect_error);
}
if (!$conexao->select_db("agenda")) {
    die("O Banco de dados não existe");
}
$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$cidade = $_GET["cidade"];
$fone = $_GET["fone"];

$sql = "INSERT INTO pessoa(nome, endereco, cidade, telefone)" . 
         "VALUES('$nome','$endereco','$cidade','$fone')";
$status = $conexao->query($sql);
if ($status == 0) {
    echo "Erro ao inserir: " .$conexao->error;
} else if ($status == 1){
    echo "<script>alert('Sucesso')</script>"
    . "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
}
$conexao->close();
?>