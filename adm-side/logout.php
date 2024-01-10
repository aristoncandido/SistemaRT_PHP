<?php

// Inicie a sessão no início do arquivo
session_start();

// Encerre a sessão
session_unset();
session_destroy();

// Redirecione para a página de login
header("Location: dados.php");
exit();
?>












?>


