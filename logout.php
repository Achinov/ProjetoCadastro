<?php

    include('cria_sessao.php');

    session_unset();
    session_destroy();
    header('Location: index.php');

?>