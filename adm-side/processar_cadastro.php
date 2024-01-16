<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $departamento = $_POST["departamento"];
    $tipo_perfil = $_POST["tipo_perfil"];
    $senha = $_POST["senha"];
    $confirma_senha = $_POST["confirma_senha"];

    if (empty($nome) || empty($email) || empty($departamento) || empty($tipo_perfil) || empty($senha) || empty($confirma_senha)) {
        header('Location: cadastrar.php?mensagem=camposobrigatorios');
        exit();
    }

    if ($senha !== $confirma_senha) {
        header('Location: cadastrar.php?mensagem=senhanaocoincide');
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 255) {
        header('Location: cadastrar.php?mensagem=emailinvalido');
        exit();
    }

    $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

    $servername = "localhost";
    $username = "coren341_corenpegeral";
    $password = "OB^29?feMp&)";
    $database = "coren341_sistemacorenpegeral";
    
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "INSERT INTO user (NOME, EMAIL, DEPARTAMENTO, TIPO_DE_PERFIL, SENHA, STATUS) VALUES (?, ?, ?, ?, ?, 1)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        header('Location: cadastrar.php?mensagem=erronadeclaracao');
        exit();
    }
    
    $stmt->bind_param("sssss", $nome, $email, $departamento, $tipo_perfil, $senha_hashed);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header('Location: cadastrar.php?mensagem=cadastrorealizado');

    exit();
} else {
    header("Location: cadastrar.php");
    exit();
}
?>
