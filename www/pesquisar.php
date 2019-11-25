<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "listar";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $db);
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "Nome da pessoa: ".$rows_cursos['nome']."<br>";
    }
?>

 