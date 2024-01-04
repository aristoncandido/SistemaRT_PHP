<?php
session_start();

if (empty($_POST) or empty($_POST["email"]) or empty($_POST["senha"])) {
    header("Location: index.php");
    exit();
}

include('conexao.php');

$usuario = $_POST["email"];
$senha = $_POST["senha"];

// Utilizando prepared statements para evitar SQL injection
$sql = "SELECT * FROM user WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($sql);

// Verifica se a preparação da declaração foi bem-sucedida
if (!$stmt) {
    die("Erro na preparação da declaração: " . $conn->error);
}

$stmt->bind_param("ss", $usuario, $senha);
$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_object();
$qtd = $result->num_rows;

if ($qtd > 0) {
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->nome;
    $_SESSION["funcao"] = $row->funcao;
    header("Location: manager.php");
    exit();
} else {
    echo "<script>alert('Usuário e/ou senha incorreta');</script>";
    header("Location:login.php;");
    exit();
}
?>