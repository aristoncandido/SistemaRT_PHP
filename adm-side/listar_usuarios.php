<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de RT / COREN-PE</title>
    <link rel="stylesheet" href="manager.css">
    <style>
        body {
            background-color: #0667B3;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            margin-top: 50px;
        }

        .table-header {
            font-weight: bold;
            text-align: center;
            background-color: #1f74ca;
            color: #FFFFFF;
        }

        .table-data {
            text-align: center;
            padding: 5px;
        }

        .result-info {
            font-size: 14px;
            margin-top: 10px;
        }

        .footer {
            font-size: 12px;
            text-align: center;
            margin-top: 20px;
            width:100%;
        }

        .footer a {
            color: #000000;
            text-decoration: none;
        }
        a{
            text-decoration:none;
            color:#3399ff;
        }
        
        h2{
            text-align:center;
        }
        
        .result-info{
            text-align:center;
        }
        
        
        .back{
            font-size:1rem;
            color:#3399ff;
            position:relative;
            left:-50%;
            
        }
        
        
        
        
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <div class="container">
        <?php
        
       
        session_start();

        if (!isset($_SESSION['usuario_id'])) {
            header("Location: dados.php");
            exit();
        }

        $nome_usuario = $_SESSION['usuario_nome'];

    
        echo "<p>Olá, $nome_usuario</p>";
        echo '<p><a href="cadastrar.php">Cadastrar Novo Usuário</a></p>';
        echo "<h2>Resultados da Consulta</h2>";
        echo "<p class='result-info'>Clique no usuário desejado para visualizar os detalhes.</p>";
        echo "<br>";

        try {
            include 'conexao.php';

            if ($conn->connect_error) {
                throw new Exception("Erro na conexão com o banco de dados: " . $conn->connect_error);
            }

            $sql1 = "SELECT ID, NOME, EMAIL, DEPARTAMENTO, TIPO_DE_PERFIL FROM user ORDER BY NOME ASC";

            $stmt = $conn->prepare($sql1);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $registros = $result->fetch_all(MYSQLI_ASSOC);

                echo '<table width="90%" border="1" cellspacing="0" cellpadding="2">';
                echo '<tr>';
                echo '<td class="table-header">Nome</td>';
                echo '<td class="table-header">E-mail</td>';
                echo '<td class="table-header">Departamento</td>';
                echo '<td class="table-header">Tipo de Perfil</td>';
                echo '<td class="table-header">*</td>';
                echo '<td class="table-header">*</td>';
                echo '<td class="table-header">*</td>';
                echo '</tr>';

                foreach ($registros as $registro) {
                    echo "<tr>";
                    echo "<td class='table-data'>{$registro['NOME']}</td>";
                    echo "<td class='table-data'>{$registro['EMAIL']}</td>";
                    $departamento = $registro['DEPARTAMENTO'];
                    $ID = $registro['ID'];
                    echo "<td class='table-data'>$departamento</td>";
                    echo "<td class='table-data'>{$registro['TIPO_DE_PERFIL']}</td>";
                    echo "<td class='table-data'><a href='alterar_usuario.php?ID=$ID'>Alterar</a></td>";
                    echo "<td class='table-data'><a href='alterar_usuario.php?ID=$ID'>Inativar</a></td>";
                    echo "<td class='table-data'><a href='deletar_usuario.php?ID=$ID'>Excluir</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Nenhum usuário cadastrado.";
            }

            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
        ?>

        <div class="footer">
            <p>Versão 1.0.1 / 2024<br>
                Conselho Regional de Enfermagem de Pernambuco<br>
                Departamento de Tecnologia da Informação<br>
                Todos os Direitos Reservados</p>
            <p class="back" ><a  href="manager.php">Voltar</a></p>
        </div>
    </div>

</body>

</html>
