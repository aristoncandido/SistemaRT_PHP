<?php

session_start();

// Verifica se o usuário já está autenticado
if (isset($_SESSION['usuario_id'])) {
    header("Location: pagina_restrita.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação dos campos do formulário
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro_login = "Por favor, insira um email válido.";
    } elseif (empty($senha)) {
        $erro_login = "Por favor, insira a senha.";
    } else {
        include 'conexao.php';

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        $email = $conn->real_escape_string($email); // Prevenção contra SQL injection
        
        $sql = "SELECT id, nome, senha, perfil FROM usuarios WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($senha, $row['senha'])) {
                $_SESSION['usuario_id'] = $row['id'];
                $_SESSION['usuario_nome'] = $row['nome'];
                $_SESSION['usuario_perfil'] = $row['perfil'];
                header("Location: pagina_restrita.php");
                exit();
            } else {
                $erro_login = "Credenciais incorretas.";
            }
        } else {
            $erro_login = "Credenciais incorretas.";
        }

        $conn->close();
    }
}
?>



?>