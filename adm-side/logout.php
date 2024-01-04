<?php




    session_start();
    unset($_SESSION["usuario"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["funçao"]);

    session_destroy();



    header("Location: login.php");
    exit;














?>


