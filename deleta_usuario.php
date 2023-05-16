<?php 
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = "delete from usuario where id_usuario=$id_usuario";
    $result = mysqli_query($con,$sql);

    if($result)
    echo "Dados deletados com sucesso!<br>";
else
    echo "Erro ao deletar dados: $msqli_erro($con)!";



?>
<a href="index.php">Voltar</a>