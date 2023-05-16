<?php 
    include('conexao.php');
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];


    echo "<h1>Alteração de dados </h1>";
    echo "<p>Usuário: $nome<\p>";
    $sql = "UPDATE usuario SET 
             nome_usuario='$nome',
             email_usuario='$email',
             fone_usuario='$fone',
             senha='$senha'
             where id_usuario=$id_usuario";
    
    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
            echo "Dados alterados com sucesso!<br>";
    else
            echo "Erro ao alterar dados: $msqli_erro($con)!";


?>

