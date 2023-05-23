<?php
    include('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario
            WHERE email_usuario = '$email' 
            AND senha = '$senha'";

    $result = mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);
    if($rowcount>0){

        include ('criasessao.php');
        $_SESSION['login'] = mysqli_fetch_array($result);
        header('Location: index.php');
    }
        else{
            echo "<h1>Usuário não encontrado!</h1>";
        }
    



?>