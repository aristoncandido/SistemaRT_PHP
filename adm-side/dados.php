<?php
session_start();

if (empty($_POST) || empty($_POST["email"]) || empty($_POST["senha"])) {
    header("Location: login.php");
    exit();
}

include('conexao.php');

$usuario = $_POST["email"];
$senha = $_POST["senha"];

// Utilizando prepared statements para evitar SQL injection
$sql = "SELECT * FROM user WHERE EMAIL = '$usuario'";

$stmt = $conn->prepare($sql);

// Verifica se a preparação da declaração foi bem-sucedida
if (!$stmt) {
    die("Erro na preparação da declaração: " . $conn->error);
}

$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_object();

    // Verificar a senha usando password_verify
    if (password_verify($senha, $row->senha_hashed)) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["funcao"] = $row->funcao;
        header("Location: manager.php");
        exit();
    }
}

// Se chegou até aqui, usuário e/ou senha incorretos
header("Location: login.php?erro=1");
exit();
?>
