<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="cadastrar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="\IMGS\icone.png" type="image/x-icon">
    <title>Sistema RT</title>
</head>
<body>


<?php




$servername = "localhost";
$username = "root";
$password = "";
$database = "sistema_rt";

// Cria uma conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
/* echo "Conexão bem-sucedida"; */






    session_start();

     // Verifique se o usuário está autenticado
     if (!isset($_SESSION['usuario_id'])) {
        // Se não estiver autenticado, redirecione para a página de login
        header("Location: dados.php");
        exit();
    }



            
        // Consulta ao banco de dados para obter informações do usuário
        $usuario_id = intval($_GET['ID']);
        $sql = "SELECT nome, email, departamento, tipo_de_perfil , senha FROM user WHERE id = $usuario_id";
        $result = $conn->query($sql);


      

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
            $nome = $row["nome"];
            $email = $row["email"];
            $departamento = $row["departamento"];
            $tipo_perfil = $row["tipo_de_perfil"];
            $senha  = $row["senha"];

            
        } else {
            // Lógica para tratar o caso em que o usuário não é encontrado
           echo '<script>alert("Não rolou")</script>';
           echo $sql;
     
        }



        $conn-> close();






?>





 
<div class="conteiner">
    <h2>Alteração de cadastro</h2>

    <form action="processar_cadastro.php" method="post">
        <!-- Campos do formulário -->

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required value="<?php echo $nome; ?>">
        <br> 

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="<?php echo $email; ?>">
        <br>

        <label for="departamento">Departamento:</label>
        <select id="departamento" name="departamento" required   value="<?php echo  $departamento?>"      >
                 <option value="registro" <?php echo ($departamento == 'registro') ? 'selected' : ''; ?>>RT</option>
                 <option value="ti" <?php echo ($departamento == 'ti') ? 'selected' : ''; ?>>TI</option>
        </select>
        <br>

        <label for="tipo_perfil">Categoria de Perfil:</label>
        <select id="tipo_perfil" name="tipo_perfil" required>
                    <option value="administrador"   <?php echo ($tipo_perfil == 'administrador') ? 'selected' : '' ; ?>     >           ADMINISTRADOR </option>
                    <option value="gerenciador"     <?php echo ($tipo_perfil == 'gerenciador'  ) ? 'selected' : '' ; ?>     >             GERENCIADOR   </option>
        </select>
        <br>

        <label for="senha">Nova Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Deixe em branco para manter a mesma senha"  value="<?php echo $senha?>">
        <br>

        <label for="confirma_senha">Confirmação de Senha:</label>
        <input type="password" id="confirma_senha" name="confirma_senha" placeholder="Deixe em branco para manter a mesma senha" value="<?php echo $senha?>">
        <br>

        <!-- Adicionada validação para verificar se a senha e a confirmação coincidem -->
        <span id="senha-erro" style="color: red; background-color:white; margin-bottom:5%;"></span>
        <script>

                                    <?php        //Alteração de Usuário

                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        // Verifica se o formulário foi enviado via POST

                                        // Campos do formulário
                                        $novoNome = $_POST['nome'];
                                        $novoEmail = $_POST['email'];
                                        $novaSenha = $_POST['senha'];
                                        $novoDepartamento = $_POST['departamento'];
                                        $novoTipoPerfil = $_POST['tipo_perfil'];

                                        // Query SQL para atualizar os dados
                                        $sql = "UPDATE user SET nome = '$novoNome', email = '$novoEmail', senha = '$novaSenha', departamento = '$novoDepartamento', tipo_de_perfil = '$novoTipoPerfil' WHERE id = $usuario_id";

                                        // Executa a query de atualização
                                        if ($conn->query($sql) === TRUE) {
                                            echo '<script>alert("Dados atualizados com sucesso!")</script>';
                                        } else {
                                            echo '<script>alert("Erro ao atualizar dados: ' . $conn->error . '")</script>';
                                            echo $sql;
                                        }
                                    }
                                        

                                    ?>



           
      
        </script>
        <!-- Fim da validação -->

        <button type="submit" id="btn-cadastrar" >Alterar</button>
     
        <button type="button"><a href="listar_usuarios.php" id="btn-cancelar"> Cancelar </a></button>
  
      
        <!-- Botão de Cancelar -->
        
    </form>

    <!-- Adicione seus scripts JavaScript aqui, se necessário -->
</div>
 
</body>
</html>


