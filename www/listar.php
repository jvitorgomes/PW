<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table {
  page-break-inside: auto;
  width: 50%;
}
 
    
tr {
  page-break-inside: avoid;
  page-break-after: auto
}
	</style>
</head>
<body>

</body>
</html>
<?php
	$conexao = new mysqli("localhost", "root", "");
	$conexao->set_charset("UTF8");
	if ($conexao->connect_errno)	{
		die("Erro ao conectar com o banco de dados ("	.
		$conexao->connect_errno . "). " .
		$conexao->connect_error);	
		}
		if(!$conexao->select_db("agenda")) {
		die("O banco de dados não existe");
		}
	$cont = 0;
$sql = "SELECT * FROM pessoa";
$resultado = $conexao -> query($sql);
if ($resultado) {
	while($linha = $resultado ->fetch_array()) {
		$codigo =$linha["codigo"];
		if($cont % 2 ==0){
			echo" <center>			
			<table	style=background-color:#5858FA border ='1'><tr>";
			echo "<tr><td>
			<th>".$linha["nome"]."</th>".
			"<th>".$linha["cidade"]."</th>" .
			"<th>".$linha["endereco"]."</th>" .
			"<th>".$linha["telefone"]."</th>".
			"<td><a href='formularioalterar.php?codigo=$codigo'>Alterar</a></td>" .
			"<td> <a href='excluir.php?codigo=$codigo'>Excluir</a></td>" .
			"<tr>";
			"<table>";
			"</center>";

		}
		else{
			echo"<center>
			<table style=background-color:#FFFF00><tr>";
			echo "<tr><td>
			<th>".$linha["nome"]."</th>".
			"<th>".$linha["cidade"]."</th>" .
			"<th>".$linha["endereco"]."</th>" .
			"<th>".$linha["telefone"]."</th>" .
			"<td><a href='alterar.php?codigo=$codigo'>Alterar</a></td>" .
			"<td> <a href='excluir.php?codigo=$codigo'>Excluir</a></td>" .
			"<tr>";
			"<table>";
			"</center>";

		}
		$cont++;
		

}
}else {
	echo "Erro SQL:" . $conexao->error;
	
}

echo"<h1>Tem ".$cont." pessoas</h1>";
echo"<form action='' method='get'>
		<input type=submit value='Nome' name='nome'>
		<input type=submit value='Cidade' name='cidade'>
		
		


	</from>";
	if(isset($_GET["nome"])){
		if($_GET["nome"]=="Nome"){
		$ordem_alf = "SELECT * FROM pessoa ORDER BY nome ASC";
		$resultado_ordem_alf = $conexao -> query($ordem_alf);
		if ($resultado_ordem_alf) {
			while($linha2 = $resultado_ordem_alf ->fetch_array()) {
				if($cont % 2 ==0){
					echo"<center>
					<table	style=background-color:#5858FA style='width:100%'><tr>";
					echo "<tr><td>". 
					$linha2["nome"]. "-".
					$linha2["cidade"] .  "-" .
					$linha2["endereco"] .  "-" .
					$linha2["telefone"] .  "<tr><table>";
					"<td><a href='alterar.php?codigo=$codigo'>Alterar</a></td>" .
			"<td> <a href='excluir.php?codigo=$codigo'>Excluir</a></td>" .
					"</tr>
					</table>
					</center>";
				}
				else{
					echo"<center>
					<table style=background-color:#FFFF00><tr>";
					echo "<tr><td>". 
					$linha2["nome"]."-".
					$linha2["cidade"] ."-".
					$linha2["endereco"]."-".
					$linha2["telefone"]."<tr><table>";
					"<td><a href='alterar.php?codigo=$codigo'>Alterar</a></td>" .
			"<td> <a href='excluir.php?codigo=$codigo'>Excluir</a></td>" .
					"</tr></table></center>";

				}
				$cont++;
				

		}
		}else {
			echo "Erro SQL:" . $conexao->error;
		}
		}
	}
	if(isset($_GET["cidade"])){
	if($_GET["cidade"]=="Cidade"){
		$ordem_alf = "SELECT * FROM pessoa ORDER BY cidade";
		$resultado_ordem_alf = $conexao -> query($ordem_alf);
		if ($resultado_ordem_alf) {
			while($linha2 = $resultado_ordem_alf ->fetch_array()) {
				if($cont % 2 ==0){
					echo"<center>
					<table	style=background-color:#5858FA style='width:100%'><tr>";
					echo "<tr><td>". 
					$linha2["cidade"]."|-|".
					$linha2["nome"]."|-|".
					$linha2["endereco"]."|-|".
					$linha2["telefone"] .  "<tr><table>";
					"</tr></table></center>";
				}
				else{
					echo"<center>
					<table style=background-color:#FFFF00><tr>";
					echo "<tr><td>". 
					$linha2["cidade"] ."|-|".
					$linha2["nome"]."|-|".
					$linha2["endereco"]."|-|".
					$linha2["telefone"]."<tr><table>";
					"</tr></table></center>";

				}
				$cont++;



 
				

		}
		}else {
			echo "Erro SQL:" . $conexao->error;
		}
	}
	
$conexao = new mysqli("localhost", "root", "");
$conexao->set_charset("UTF8");
if ($conexao->connect_error) {
    die("Falha ao conectar: " . $conexao->connect_error);
}
if (!$conexao->select_db("agenda")) {
    die("O Banco de dados não existe");
}

  




		}	
		$conexao ->close();
?>	