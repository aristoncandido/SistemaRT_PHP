<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $departamento = $_POST["departamento"];
    $tipo_perfil = $_POST["tipo_perfil"];
    $senha = $_POST["senha"];
    $confirma_senha = $_POST["confirma_senha"];

    // Validação básica (você pode adicionar mais validações conforme necessário)
    if ($senha !== $confirma_senha) {
        echo "As senhas não coincidem.";
        exit();
    }

    // Hash da senha (certifique-se de usar métodos seguros para armazenar senhas)
    $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

    // Conexão com o banco de dados (substitua os valores conforme necessário)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema_rt";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se a conexão foi bem-sucedida
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Prepara a declaração SQL com placeholders
    $sql = "INSERT INTO user (NOME, EMAIL, DEPARTAMENTO, TIPO_DE_PERFIL, SENHA) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Verifica se a preparação da declaração foi bem-sucedida
    if (!$stmt) {
        die("Erro na preparação da declaração: " . $conn->error);
    }

    // Atribui os parâmetros e executa a declaração
    $stmt->bind_param("sssss", $nome, $email, $departamento, $tipo_perfil, $senha_hashed);
    $stmt->execute();

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();

    // Redireciona para uma página de sucesso (substitua "sucesso.php" conforme necessário)
    echo "<script>alert('Usuário cadastrado com sucesso!'); window.location='login.php';</script>";
    exit();
} else {
    // Se o formulário não foi enviado, redireciona para a página de cadastro
    header("Location: cadastro.php");
    exit();
}
?>
