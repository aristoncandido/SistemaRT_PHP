<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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



            
        // Consulta ao banco de dados para obter informações do usuário (substitua pela sua lógica)
        $usuario_id = intval($_GET['id']);
        $sql = "SELECT nome, email, departamento, tipo_de_perfil , senha FROM user WHERE id = $ID";
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

    <form action="processar_cadastro.php" method="get">
        <!-- Campos do formulário -->

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required value="<?php echo $nome; ?>">
        <br> 

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="<?php echo $email; ?>">
        <br>

        <label for="departamento">Departamento:</label>
        <select id="departamento" name="departamento" required>
            <option value="registro">RT</option>
            <option value="ti">TI</option>
        </select>
        <br>

        <label for="tipo_perfil">Categoria de Perfil:</label>
        <select name="tipo_perfil" id="tipo_perfil">
            <option value="administrador">ADMINISTRADOR</option>
            <option value="gerenciador">GERENCIADOR</option>
        </select>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required value="<?php $senha?>">
        <br>

        <label for="confirma_senha">Confirmação de Senha:</label>
        <input type="password" id="confirma_senha" name="confirma_senha" required value="<?php $senha?>">
        <br>

        <!-- Adicionada validação para verificar se a senha e a confirmação coincidem -->
        <span id="senha-erro" style="color: red; background-color:white; margin-bottom:5%;"></span>
        <script>
            function validarFormulario() {
                let nome = document.getElementById('nome').value;
                let email = document.getElementById('email').value;
                let departamento = document.getElementById('departamento').value;
                let tipoPerfil = document.getElementById('tipo_perfil').value;
                let senha = document.getElementById('senha').value;
                let confirmaSenha = document.getElementById('confirma_senha').value;
                let senhaErro = document.getElementById('senha-erro');
                let botaoCadastrar = document.getElementById('btn-cadastrar');

                if (nome && email && departamento && tipoPerfil && senha && confirmaSenha && senha === confirmaSenha) {
                    senhaErro.textContent = '';
                    botaoCadastrar.disabled = false;
                    



                } else {
                    senhaErro.textContent = 'Por favor, preencha todos os campos corretamente.';
                  

                    
                    botaoCadastrar.disabled = true;
                }
            }

            document.getElementById('senha').addEventListener('input', validarFormulario);
            document.getElementById('confirma_senha').addEventListener('input', validarFormulario);
      
      
      
      
      
      
      
      
      
      
      
        </script>
        <!-- Fim da validação -->

        <button type="submit" id="btn-cadastrar" disabled>Alterar</button>
         <button type="button"><a href="listar_usuarios.php" id="btn-cancelar"> Cancelar    </a></button>
  
               
            
   
           
            
         

        <!-- Botão de Cancelar -->
        
    </form>

    <!-- Adicione seus scripts JavaScript aqui, se necessário -->
</div>
 
</body>
</html>


