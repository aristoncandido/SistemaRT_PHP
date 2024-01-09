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
    <title>Cadastro Administrativo</title>
   
</head>
<body>

<div class="conteiner">
<h2>Cadastro Administrativo</h2>

<form action="processar_cadastro.php" method="post">
    <!-- Campo Nome -->
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <br>

    <!-- Campo Email -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <br>

    <!-- Campo Departamento -->
    <label for="departamento">Departamento:</label>
    <select id="departamento" name="departamento" required>
        <option value="registro">RT</option>
        <option value="ti">TI</option>




    </select>

    <br>


    <label for="tipo_perfil">
        Categoria de Perfil:
    </label>
    <select name="tipo_perfil" id="tipo_perfil">

    <option value="administrador"> ADMINISTRADOR</option>
    <option value="gerenciador">GERENCIADOR</option>



    </select>

<br>

    <!-- Campo Senha -->
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>

    <br>

    <!-- Confirmação de Senha -->
    <label for="confirma_senha">Confirmação de Senha:</label>
    <input type="password" id="confirma_senha" name="confirma_senha" required>

    <br>

    <!-- Botão de Envio -->
    <button type="submit">Cadastrar</button>
</form>

<!-- Adicione seus scripts JavaScript aqui, se necessário -->
</div>
    
</body>
</html>
