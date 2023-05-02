<?php
        include("conexao.php");
        $nome = $_POST['nome'];
        $email= $_POST['email'];
        $fone = $_POST['fone'];
        $senha = $_POST['senha'];
   
        echo "<h1>Dados do usuário</h1>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Telefone: $fone <br>";
        echo "Senha: $senha <br>";

        $sql = "INSERT INTO usuario (nome_usuario, email_usuario,
                                        fone_usuario, senha)";
        $sql .= "VALUES ('".$nome."','".$email."','".
                            $fone."','".$senha."')";
        
                            
        echo $sql. "<br>";
        $result = mysqli_query($con, $sql);
        if($result)
        echo "Dados cadastrados com sucesso!";
        else
        echo"Erro ao tentar cadastrar!";
                        



?>